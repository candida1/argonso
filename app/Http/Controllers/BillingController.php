<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Billing;
use App\Http\Requests\BillingRequest;
use App\Models\Case_customer;

class BillingController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $billings= Billing::with ('case_customer')->paginate(10);
        return view ('billings.index',compact('billings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $billings= new Billing();
        $case_customers= case_customer::all();
        return view ('billings.create',compact('billings','case_customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(BillingRequest $request)
    {
        Billing::create($request->validated());
        return redirect()->route('billings.index')->with('success','La factura ha sido creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $billings= Billing::find($id);
        $case_customers= case_customer::all();
        return view ('billings.show',compact('billings','case_customers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $billings= Billing::find($id);
        $case_customers= case_customer::all();
        return view ('billings.edit',compact('billings','case_customers'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(BillingRequest $request, int $id)
    {
        $billings= billing::find($id);
        $billings->update($request->validated());
        return redirect()->route('billings.index')->with('updated','La factura ha sido actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $billings= billing::find($id);
        $billings->delete();
        return redirect()->route('billings.index')->with('deleted','La factura ha sido eliminada con éxito');
    }
}
