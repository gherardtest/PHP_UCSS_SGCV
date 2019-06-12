<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DetalleNotaPedidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
    public function agregarProducto(Request $request){
        $id = $request ->get('productoid') ;
        $nameProd= $request ->get('productoname') ;
        $precioProd= $request ->get('productoprecio') ;
        $unidadMedidaProd= $request ->get('productounidadmedida') ;
        $producto = [
            'product_id' => $id,
            'product_name' => $nameProd,
            'product_price' => $precioProd,
            'product_unidad_medida' => $unidadMedidaProd,
            'product_cantidad' =>1
          ];
        \Session::push('detalleNota', $producto);

        $cart = \Session::get('detalleNota');
return $cart ;
/*
        $id = $request ->get('nota_pedido_id') ;
        $name= $request -> get('nameCustomer');
        $request->session()->put('nota_pedidos_id',$id);
        $request->session()->put('nota_pedidos_name',$name);
      */  
        //return redirect('registrarComprobantePago');
      // return redirect('registrarNotaPedido');
     
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
    public function show($id)
    {
        //
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
