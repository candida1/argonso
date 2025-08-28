<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Evidence_section;
use App\Http\Requests\Evidence_sectionRequest;


class Evidence_sectionController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $evidence_sections = Evidence_section::latest()->paginate(10);
        return view('evidence_sections.index',compact('evidence_sections'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $evidence_sections= new Evidence_section();
        return view('evidence_sections.create',compact('evidence_sections'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Evidence_sectionRequest $request)
    {
        Evidence_section::create ($request->validated());
        return redirect()->route('evidence_sections.index')->with('success','Apartado de evidencias ha sido creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $evidence_sections= Evidence_section::find($id);
        return view('evidence_sections.show',compact('evidence_sections'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $evidence_sections= Evidence_section::find($id);
        return view ('evidence_sections.edit',compact('evidence_sections'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Evidence_sectionRequest $request, int $id)
    {
        $evidence_sections= Evidence_section::find($id);
        $evidence_sections->update($request->validated());
        return redirect()->route('evidence_sections.index')->with('updated','Apartado de evidencias ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $evidence_sections= Evidence_section::find($id);
        $evidence_sections->delete();
        return redirect()->route('evidence_sections.index')->with('deleted','Apartado de evidencia  ha sido eliminado con éxito');
    }
}
