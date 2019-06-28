<?php

namespace App\Http\Controllers;

use App\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //
        //$datos['Clientes'] = Customer::paginate(5);
        //return $datos;
        
        
        $acustomers = Customer::orderBy('id','DESC')
        ->paginate(10);

        //$acustomers = Customer::paginate(10);
        return view('concli')->with(compact('acustomers'));
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('regcli');
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
        Customer::create($data);
        \Session::flash('success','Registro Correcto');
        
        return redirect('/registrarCliente');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function show(Request $customer)
    {
        $name = $customer ->get('nameCustomer') ;
        $nrodoc = $customer ->get('nrodoc') ;
        $acustomers = Customer::orderBy('id','DESC')                   
                      ->where('nameCustomer','LIKE',"%$name%")
                      ->where('nrodoc','LIKE',"%$nrodoc%")
                      ->paginate(10);
        
       return view('concli')->with(compact('acustomers'));
    }
    public function seleccionarCliente(Request $request){
        $nrodoc = $request ->get('nrodoccliente') ;
        $name = $request ->get('nameCustomer') ;
        $request->session()->put('nrodoccli',$nrodoc);
        $request->session()->put('nameCustomer',$name);
        $request->session()->put('customerid',$name);

        $nameCustomer = $request->session()->get('nameCustomer');
      
        return redirect('registrarNotaPedido');
     
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function edit(Customer $customer)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Customer $customer)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Customer  $customer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Customer $customer)
    {
        //
    }
}
