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

    public function actualizarDetalle(Request $request){
        $cantidadRequest=$request->cantidad;
        $productoid=$request->product_id;

        if ($cantidadRequest<=0) {
            \Session::flash('error','La cantidad no puede ser menor a 1');     
        }else{
            $detalle= \Session::get('detalleNota');
            \Session::forget('detalleNota');
            $i = 0;
            foreach($detalle as $item=>$value) {
                $id = $value['product_id'] ;
                
                    $nameProd= $value['product_name'] ;
                    $precioProd=  $value['product_price'] ;
                    $cantidad=  $value['product_cantidad'] ;
                    $unidadMedidaProd=  $value['product_unidad_medida'] ;

                    $producto = [
                        'product_id' => $id,
                        'product_name' => $nameProd,
                        'product_price' => $precioProd,
                        'product_unidad_medida' => $unidadMedidaProd,
                        'product_cantidad' =>$cantidad
                    ];
                    \Session::push('detalleNota', $producto);
                
                if ($value['product_id'] == $productoid) { 
                    $request->session()->put('detalleNota.'.$item.'.product_cantidad',$cantidadRequest);
                            
                }
                $i++;
            }
        }
       //-------------Actualizar totales-----------------
       $NotaPedidocontroller=new NotaPedidoController();
       $NotaPedidocontroller->actualizarTotales();
       //------------------------------------------------
        
        return redirect('registrarNotaPedido');
    }
    public function eliminarDeDetalle(Request $request){
        
        $productoid=$request->product_id;

        $detalleNota=[];
        $detalle= \Session::get('detalleNota');
        \Session::forget('detalleNota');
        $i = 0;
        foreach($detalle as $item=>$value) {
            $id = $value['product_id'] ;
         
             $nameProd= $value['product_name'] ;
             $precioProd=  $value['product_price'] ;
             $cantidad=  $value['product_cantidad'] ;
             $unidadMedidaProd=  $value['product_unidad_medida'] ;

             $producto = [
                 'product_id' => $id,
                 'product_name' => $nameProd,
                 'product_price' => $precioProd,
                 'product_unidad_medida' => $unidadMedidaProd,
                 'product_cantidad' =>$cantidad
               ];
             \Session::push('detalleNota', $producto);
            
         if ($value['product_id'] == $productoid) { 
                    
            $request->session()->forget('detalleNota.'.$i);
                       
         }
         $i++;

        //-------------Actualizar totales-----------------
       $NotaPedidocontroller=new NotaPedidoController();
       $NotaPedidocontroller->actualizarTotales();
       //------------------------------------------------
     }
           
     //return \Session::get('detalleNota');
       return redirect('registrarNotaPedido');
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
 //-------------Actualizar totales-----------------
 $NotaPedidocontroller=new NotaPedidoController();
 $NotaPedidocontroller->actualizarTotales();
 //------------------------------------------------
        


        $cart = \Session::get('detalleNota');
        return redirect('registrarNotaPedido');
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
