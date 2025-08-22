<?php

namespace App\Http\Controllers;

use App\Models\Report_module;
use Illuminate\Http\Request;
use App\Models\Reports_module;
use App\Http\Requests\Report_moduleRequest;

class Report_moduleController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $report_modules = Report_module::latest()->paginate(10);
        return view('report_modules.index',compact('report_modules'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $report_modules= new Report_module();
        return view('report_modules.create',compact('report_modules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Report_moduleRequest $request)
    {
        Report_module::create ($request->validated());
        return redirect()->route('report_modules.index')->with('success','Modulo de reportes ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $report_module= Report_module::find($id);
        return view('report_module.show',compact('report_modules'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $report_modules= Report_module::find($id);
        return view ('report_modules.edit',compact('report_modules'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Report_moduleRequest $request, int $id)
    {
        $report_modules= Report_module::find($id);
        $report_modules->update($request->validated());
        return redirect()->route('report_modules.index')->with('updated','Modulo de reportes ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $report_modules= Report_module::find($id);
        $report_modules->delete();
        return redirect()->route('report_module.index')->with('deleted','Modulo de reportes ha sido eliminado con éxito');
    }
}
