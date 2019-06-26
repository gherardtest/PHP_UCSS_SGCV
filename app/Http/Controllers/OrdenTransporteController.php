<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\OrdenTransporte;

class OrdenTransporteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $OrdenesTransportes =  DB::table('Orden_Transporte')
        ->join('customers', 'customers.id', '=', 'Orden_Transporte.customer_id')
        ->join('estados_ord_trans', 'estados_ord_trans.id', '=', 'Orden_Transporte.estados_ot_id')
        ->select(
                'customers.nameCustomer',
                'customers.id',
                'customers.nrodoc',
                'Orden_Transporte.id as codOrdTrans',
                'Orden_Transporte.fecha_envio',
                'Orden_Transporte.direccion_envio',
                'Orden_Transporte.estados_ot_id',
                'estados_ord_trans.id',
                'estados_ord_trans.descripcion')
        //->where('customers.nrodoc','=',$cliente_doc)
        ->get();
        return view('buscestenv')->with(compact('OrdenesTransportes'));
    }

    public function indexBuscarOrdenTrans(){
        return view('regestenvio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contacto = $request ->get('contacto') ;
        $telefono_contacto = $request ->get('telefono_contacto') ;
        $fecha_envio = $request -> get('fecha_envio');
        $horario_envio = $request ->get('horario_envio') ;
        $direccion_envio = $request ->get('direccion_envio') ;

        $request->session()->put('transporte',1);
        
        $request->session()->put('contacto',$contacto);
        $request->session()->put('telefono_contacto',$telefono_contacto);
        $request->session()->put('fecha_envio',$fecha_envio);
        $request->session()->put('horario_envio',$horario_envio);
        $request->session()->put('direccion_envio',$direccion_envio);

        return redirect('/registrarNotaPedido');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function buscarOrdenTransporte(Request $request){

        $cliente_doc = $request ->get('nrodoccliente') ;
        $OrdenesTransportes =  DB::table('Orden_Transporte')
        ->join('customers', 'customers.id', '=', 'Orden_Transporte.customer_id')
        ->join('estados_ord_trans', 'estados_ord_trans.id', '=', 'Orden_Transporte.estados_ot_id')
        ->select('customers.nameCustomer',
                'customers.id',
                'customers.nrodoc',
                'Orden_Transporte.id',
                'Orden_Transporte.fecha_envio',
                'Orden_Transporte.direccion_envio',
                'Orden_Transporte.estados_ot_id',
                'estados_ord_trans.id',
                'estados_ord_trans.descripcion')
        ->where('customers.nrodoc','=',$cliente_doc)
        ->get();
        return view('buscestenv')->with(compact('OrdenesTransportes'));
        
     }

    public function actualizarEstadoEnvio(Request $request){
        $orden_transporte_id = $request['orden_transporte_id'];
        $estado_ord_trans = $request['estado_ord_trans_id'];
        $observaciones = $request['observaciones'];
        
        OrdenTransporte::where('id', '=', $orden_transporte_id)
        ->update(array('estados_ot_id' => $estado_ord_trans,
                       'observaciones' => $observaciones)
        );

        return redirect('/registrarEstadoEnvio');
    }

    public function seleccionarOrdenTransporte(Request $request){
        $request->session()->put('orden_transporte_id',$request->get('orden_transporte_id'));
       
        $cliente= DB::table('Orden_Transporte')
        ->join('customers', 'customers.id', '=', 'Orden_Transporte.customer_id')
        ->join('estados_ord_trans', 'estados_ord_trans.id', '=', 'Orden_Transporte.estados_ot_id')
        ->select('customers.nameCustomer',
                'customers.id',
                'customers.nrodoc',
                'Orden_Transporte.id',
                'Orden_Transporte.nota_pedidos_id',
                'Orden_Transporte.fecha_envio',
                'Orden_Transporte.direccion_envio',
                'Orden_Transporte.estados_ot_id',
                'estados_ord_trans.id',
                'estados_ord_trans.descripcion')
        ->where('orden_Transporte.id','=',$request->get('orden_transporte_id'))
        ->first();
        $request->session()->put('nombre_cliente', $cliente->nameCustomer);
        $request->session()->put('nota_pedidos_id', $cliente->nota_pedidos_id);

        return redirect('/registrarEstadoEnvio');
    }

    public function show()
    {
        $OrdenesTransportes =  DB::table('Orden_Transporte')
        ->join('customers', 'customers.id', '=', 'Orden_Transporte.customer_id')
        ->join('estados_ord_trans', 'estados_ord_trans.id', '=', 'Orden_Transporte.estados_ot_id')
        ->select(
                'customers.nameCustomer',
                'customers.id',
                'customers.nrodoc',
                'Orden_Transporte.id as codOrdTrans',
                'Orden_Transporte.fecha_envio',
                'Orden_Transporte.direccion_envio',
                'Orden_Transporte.estados_ot_id',
                'estados_ord_trans.id',
                'estados_ord_trans.descripcion')
        //->where('customers.nrodoc','=',$cliente_doc)
        ->get();
        return view('busordtrans')->with(compact('OrdenesTransportes'));
        
      
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
