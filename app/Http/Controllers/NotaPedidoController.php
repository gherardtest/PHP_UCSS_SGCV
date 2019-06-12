<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use App\NotaPedido;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Session\Session;

class NotaPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
       
       /* $inputs=Input::all();
        $dni = $inputs['dni'];
        */


        if(!\Session::has('detalleNota')) {
            \Session::put('detalleNota',array());
        }


        if(!\Session::has('detalleTransporte')) {
            \Session::put('detalleTransporte',array());
        }
        if ($request->session()->has('transporte')) {
            $transporte = 1; 
        }else{
            $transporte =0;
        }
        $detalleNota = \Session::get('detalleNota'); 
    
        if ($request->session()->has('nrodoccli')) {
            $nrodoccliente = $request->session()->get('nrodoccli');
            $nameCustomer = $request->session()->get('nameCustomer');          
        }else{
            $nrodoccliente = ' ';
            $nameCustomer = ' ';
        }  
        return view('regnotped')->with(compact('nrodoccliente','nameCustomer','detalleNota','transporte'));
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
        //
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
