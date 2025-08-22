<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Http\Requests\CustomerRequest;

class CustomerController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $customers = Customer::latest()->paginate(10);
        return view('customers.index',compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $customers= new Customer();
        return view('customers.create',compact('customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CustomerRequest $request)
    {
        Customer::create ($request->validated());
        return redirect()->route('customers.index')->with('success','Cliente creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $customers= Customer::find($id);
        return view('customers.show',compact('customers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $customers= Customer::find($id);
        return view ('customers.edit',compact('customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CustomerRequest $request, int $id)
    {
        $customers= Customers::find($id);
        $customers->update($request->validated());
        return redirect()->route('customers.index')->with('updated','Cliente actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $customers= Customer::find($id);
        $customers->delete();
        return redirect()->route('customers.index')->with('deleted','Cliente eliminado con éxito');
    }
}
