<?php

namespace App\Http\Controllers;

use App\Models\Case_customer;
use Illuminate\Http\Request;
use App\Http\Requests\Case_customerRequest;
use App\Models\Customer;
use App\Models\Lawyer;

use App\Exports\Case_customerExport;
use Maatwebsite\Excel\Facades\Excel;

class Case_customerController
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = Case_customer::with(['customer','lawyer']);

    if ($request->filled('status')) {
        $query->where('status_case', $request->status);
    }

    if ($request->filled('customer_id')) {
        $query->where('customer_id', $request->customer_id);
    }

    if ($request->filled('type_case')) {
        $query->where('type_case', $request->type_case);
    }

    $case_customers = $query->paginate(10)->withQueryString();
    $customers = Customer::all();

    return view('case_customers.index', compact('case_customers', 'customers'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $case_customers= new Case_customer();
        $customers= customer::all();
        $lawyers= lawyer::all();
        return view ('case_customers.create',compact('case_customers','customers','lawyers'));
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Case_customerRequest $request)
    {
        Case_customer::create($request->validated());
        return redirect()->route('case_customers.index')->with('success','Caso del cliente ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $case_customers= Case_customer::find($id);
        $customers= customer::all();
        $lawyers= lawyer::all();
        return view ('case_customers.show',compact('case_customers','customers','lawyers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $case_customers= Case_customer::find($id);
        $customers= customer::all();
        $lawyers= lawyer::all();
        return view ('case_customers.edit',compact('case_customers','customers','lawyers'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Case_customerRequest $request, int $id)
    {
        $case_customers= case_customer::find($id);
        $case_customers->update($request->validated());
        return redirect()->route('case_customers.index')->with('updated','El caso del cliente ha sido actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $case_customers= case_customer::find($id);
        $case_customers->delete();
        return redirect()->route('case_customers.index')->with('deleted','El caso del cliente ha sido eliminada con éxito');
    }

   public function exportExcel(Request $request)
{

    $typeCase   = $request->input('type_case');

    return Excel::download(new Case_customerExport($typeCase), 'case_customers.xlsx');
}

}
