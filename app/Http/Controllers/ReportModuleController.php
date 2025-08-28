<?php

namespace App\Http\Controllers;
use App\Http\Requests\ReportModuleRequest;
use App\Models\ReportModule;

class ReportModuleController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $reportmodules = ReportModule::latest()->paginate(10);
        return view('reportmodules.index',compact('reportmodules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $reportmodules= new Reportmodule();
        return view('reportmodules.create',compact('reportmodules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ReportModuleRequest $request)
    {
        ReportModule::create ($request->validated());
        return redirect()->route('reportmodules.index')->with('success','Modulo de reportes ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $reportmodules= ReportModule::find($id);
        return view('reportmodules.show',compact('reportmodules'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $reportmodules= ReportModule::find($id);
        return view ('reportmodules.edit',compact('reportmodules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ReportModuleRequest $request, int $id)
    {
        $reportmodules= ReportModule::find($id);
        $reportmodules->update($request->validated());
        return redirect()->route('reportmodules.index')->with('updated','Modulo de reportes ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $reportmodules= ReportModule::find($id);
        $reportmodules->delete();
        return redirect()->route('reportmodules.index')->with('deleted','Modulo de reportes ha sido eliminado con éxito');
    }
}
