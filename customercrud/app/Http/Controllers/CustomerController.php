<?php

namespace App\Http\Controllers;
Use Request;
use App\Customer;
use App\Http\Controllers\Controller;

class CustomerController extends Controller
{

public function create(){
    return view('customer.create');
}

//sending data to DB
public function store()
{
    $input = Request::all();
    Customer::create($input);
    return redirect('customer');
}

public function index()
{
    $customers = Customer::all();
//    return $customers->toArray();
    return view('customer.render', compact('customers'));
}
public function edit($id){
    $customers = Customer::findorFail($id);

    return view('customer.edit' , compact('customers'));

}
public function update($id){
    $customers = Customer::findorFail($id);
    $customers -> update(Request::all());
    return redirect('customer');
}
//public function __construct()
//{
//    $this->middleware('auth');
//}


}
