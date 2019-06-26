<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\NotaPedido;
use App\Customer;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;
use App\DetalleNotaPedido;
use App\OrdenTransporte;

class NotaPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function actualizarTotales(){
         //Actualizar total e igv
        $total=0;
        $totaligv=0;
        foreach(\Session::get('detalleNota') as $item) {
           
            $total=$total+($item['product_cantidad']*$item['product_price']);       
        }
        $totaligv=$total*0.18;
        \Session::put('total',$total);
        \Session::put('igv',$totaligv);

     }
    public function index(Request $request)
    {  
        if(!\Session::has('detalleNota')) {
            \Session::put('detalleNota',array());

        }
        $total=0;
        $totaligv=0;
        if ($request->session()->has('transporte')) {
            $transporte = 1; 
            $precioTransporte=30.00;
            
        }else{
            $transporte =0;
            $precioTransporte=0.00;
        }
        foreach(\Session::get('detalleNota') as $item) {
           
            $total=$total+($item['product_cantidad']*$item['product_price']);       
        }
        $total = $total+$precioTransporte;
        $totaligv=$total*0.18;

        if(!\Session::has('detalleTransporte')) {
            \Session::put('detalleTransporte',array());
        }
        
        $detalleNota = \Session::get('detalleNota'); 
    
        if ($request->session()->has('nrodoccli')) {
            $nrodoccliente = $request->session()->get('nrodoccli');
            $nameCustomer = $request->session()->get('nameCustomer');          
        }else{
            $nrodoccliente = ' ';
            $nameCustomer = ' ';
        }  
        return view('regnotped')->with(compact('nrodoccliente','nameCustomer','detalleNota','transporte','total','totaligv'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data1=[];
        $data1 = $request->except('_token');

        $total=0;
        $totaligv=0;
        $detalle=\Session::get('detalleNota');
        if (!$request->session()->has('nrodoccli')) {
            \Session::flash('error','No ha seleccionado el cliente');     
        }else if(count($detalle)==0){
            \Session::flash('error','No ha seleccionado productos');     
        }
        else{
            // Datos de cabecera de nota de pedido
            if ($request->session()->has('transporte')) {
                $transporte = 30.00; 
            }else{
                $transporte = 0.00; 
            }
            $this->user =  \Auth::user();
            $user_id=$this->user->id;
            $fecha_emision = new \DateTime();

            $nrodoc= \Session::get('nrodoccli');

            $customer_id =  DB::table('customers')
                                ->select('customers.id')
                                ->where('nrodoc','=',"$nrodoc")
                                ->first();

            $data=array_add($data1, 'fecha_emision', $fecha_emision->format('Y-m-d H:i:s'));
            $data=array_add($data, 'user_id', $this->user->id);
            $data=array_add($data, 'customer_id', $customer_id->id);
            $data=array_add($data, 'estadoNotaPedido', 1);
            $data=array_add($data, 'igv', \Session::get('igv'));
            $data=array_add($data, 'total', \Session::get('total'));
            $data=array_add($data, 'transporte', $transporte);

            //Comando que ejecuta el insert en tabla nota_pedidos
           $notapedido= NotaPedido::create($data);

            // Datos de detalle de nota de pedido
           
            $data=[];
            foreach(\Session::get('detalleNota') as $item) {
                
                $subtotal=$item['product_cantidad']*$item['product_price'];     
               
                $data['producto_id']=$item['product_id'];
                $data['nota_pedido_id']=$notapedido->id; 
                $data['cantidad']=$item['product_cantidad'];
                $data['subtotal']=$subtotal;
            //Comando que ejecuta el insert en tabla nota_pedidos
                DetalleNotaPedido::create($data);
            }
            $totaligv=$total*0.18;


            if ($request->session()->has('transporte')) {
                $transporte = 30.00; 
                $datosTransporte=[];
                $this->user =  \Auth::user();
                $datosTransporte['user_id'] = $this->user->id;
                $datosTransporte['customer_id'] = $customer_id->id;
                $datosTransporte['nota_pedidos_id'] = $notapedido->id;
                $datosTransporte['contacto_ref'] = $request->session()->get('contacto');
                $datosTransporte['telef_contacto_ref'] = $request->session()->get('telefono_contacto');
                $datosTransporte['fecha_envio'] = $request->session()->get('fecha_envio');
                $datosTransporte['horario_envio'] = $request->session()->get('horario_envio');
                $datosTransporte['direccion_envio'] = $request->session()->get('direccion_envio');
                $datosTransporte['precio'] = 30.00;
                $datosTransporte['estados_ot_id'] = 2;
             
                OrdenTransporte::create( $datosTransporte);
                
            }
            //Eliminar los datos de la sesion 
            $request->session()->forget('nrodoccli');
            $request->session()->forget('detalleNota');
            $request->session()->forget('igv');
            $request->session()->forget('total');
            //borrar datos de transporte
            $request->session()->forget('transporte');
            $request->session()->forget('contacto');
            $request->session()->forget('telefono_contacto');
            $request->session()->forget('fecha_envio');
            $request->session()->forget('horario_envio');
            $request->session()->forget('direccion_envio');
            
            \Session::flash('success','Registro Correcto');

        }
  
        return redirect('/registrarNotaPedido');
    }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function buscar()
    {
        $notapedidos =  DB::table('nota_pedidos')
        ->join('customers', 'customers.id', '=', 'nota_pedidos.customer_id')
        ->join('users', 'users.id', '=', 'nota_pedidos.user_id')
        ->select('customers.nameCustomer', 'nota_pedidos.id','users.name','nota_pedidos.estadoNotaPedido','nota_pedidos.total')
        ->get();
        return view('connotped')->with(compact('notapedidos'));
    }



    public function show(Request $request)
    {
        $nota_pedido_id = $request ->get('nota_pedido_id') ;
        $nota_pedido_name = $request ->get('nota_pedido_name') ;
        $cliente = $request ->get('cliente') ;
        $vendedor = $request ->get('vendedor') ;
        $estado = $request ->get('estado') ;
              
        $notapedidos =  DB::table('nota_pedidos')
        ->join('customers', 'customers.id', '=', 'nota_pedidos.customer_id')
        ->join('users', 'users.id', '=', 'nota_pedidos.user_id')
        ->select('customers.nameCustomer', 'nota_pedidos.id','users.name','nota_pedidos.estadoNotaPedido','nota_pedidos.total')
        ->where('nota_pedidos.id','LIKE',"%$nota_pedido_id%")
        ->where('customers.nameCustomer','LIKE',"%$cliente%")
        ->where('users.name','LIKE',"%$vendedor%")
        ->where('nota_pedidos.estadoNotaPedido','LIKE',"%$estado%")
        ->get();
        
       return view('connotped')->with(compact('notapedidos'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function seleccionarNotaPedido(Request $request){
        $id = $request ->get('nota_pedido_id') ;
        $name= $request -> get('nameCustomer');
        $request->session()->put('nota_pedidos_id',$id);
        $request->session()->put('nota_pedidos_name',$name);
        
        return redirect('registrarComprobantePago');
       
     
    }
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
