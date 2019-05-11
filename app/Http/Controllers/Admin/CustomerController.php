<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){
      $customers = Customer::all();
      return view('regcli')->with(compact('customers'));
    }

    public function store(Request $request){
      Customer::create($request->all());
      return back()->with('notification', 'El Cliente fue registrado');
    }
}
