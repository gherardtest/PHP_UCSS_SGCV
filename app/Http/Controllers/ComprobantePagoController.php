<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\DetalleNotaPedido;
use Illuminate\Support\Facades\DB;
use App\NotaPedido;
use App\ComprobantePago;

class ComprobantePagoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
 
        if ($request->session()->has('nota_pedidos_id')) {
           
            $id = $request->session()->get('nota_pedidos_id');
            $nota_pedido_name = $request->session()->get('nota_pedidos_name');
            $nota_pedido_id=$id;
            $cabecera_nota_pedido = [];
            $detalle_nota_pedido = [];
           
            $cabecera_nota_pedido = NotaPedido:: where('id',"$id")->get();
            $detalle_nota_pedido = DB::table('nota_pedidos_detalles')
            ->join('productos', 'productos.id', '=', 'nota_pedidos_detalles.producto_id')
            ->select('productos.descripcion', 'nota_pedidos_detalles.cantidad','productos.precio','nota_pedidos_detalles.subtotal')
            ->where('nota_pedidos_detalles.nota_pedido_id','=',$id)
            ->get();
            
        }else{
            $nota_pedido_name='';
            $nota_pedido_id = 0;
            $cabecera_nota_pedido = [];
            $detalle_nota_pedido = [];
        }


        
        //return $cabecera_nota_pedido[0]->total;
        return view('regcompag')->with(compact('detalle_nota_pedido','cabecera_nota_pedido','nota_pedido_id','nota_pedido_name'));
       //return  $nota_pedido_id;
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
        $data = $request->except('_token'); 
        ComprobantePago::create($data);
        $id = $data['nota_pedidos_id'];
         
        NotaPedido::where('id', '=', $id)->update(array('estadoNotaPedido' => 2));
        \Session::flash('success','Registro Correcto');
        return redirect('/registrarComprobantePago');
      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
    public function show(Request $request)
    {   
        if ($request->session()->has('nota_pedidos_id')) {
            $nota_pedido_id = $request->session()->get('nota_pedidos_id');
            $id = $nota_pedido_id[0];
            $cabecera_nota_pedido = NotaPedido:: where('id',"$id");
        }else{
            
        }
       
        $detalle_nota_pedido = DB::table('nota_pedidos_detalles')
            ->join('productos', 'productos.id', '=', 'nota_pedidos_detalles.producto_id')
            ->select('productos.descripcion', 'nota_pedidos_detalles.cantidad','productos.precio','nota_pedidos_detalles.subtotal')
            ->where('nota_pedidos_detalles.nota_pedido_id','$id')
            ->get();
            return $cabecera_nota_pedido;
       // return view('regcompag')->with(compact('detalle_nota_pedido'));
        
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
