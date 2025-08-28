<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Change_history;
use App\Http\Requests\Change_historyRequest;
use App\Models\Case_customer;

class Change_historyController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $change_histories= Change_history::with ('case_customer')->paginate(10);
        return view ('change_histories.index',compact('change_histories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $change_histories= new Change_history();
        $case_customers= case_customer::all();
        return view ('change_histories.create',compact('change_histories','case_customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Change_historyRequest $request)
    {
        Change_history::create($request->validated());
        return redirect()->route('change_histories.index')->with('success','Historial de cambios ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $change_histories= Change_history::find($id);
        $case_customers= case_customer::all();
        return view ('change_histories.show',compact('change_histories','case_customers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $change_histories= Change_history::find($id);
        $case_customers= case_customer::all();
        return view ('change_histories.edit',compact('change_histories','case_customers'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Change_historyRequest $request, int $id)
    {
        $change_histories= change_history::find($id);
        $change_histories->update($request->validated());
        return redirect()->route('change_histories.index')->with('updated','El historial de cambios ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $change_histories= change_history::find($id);
        $change_histories->delete();
        return redirect()->route('change_histories.index')->with('deleted','El hsitorial de cambios ha sido eliminado con éxito');
    }
}
