<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Agenda;
use App\Http\Requests\AgendaRequest;
use App\Models\Customer;

class AgendaController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $agendas= Agenda::with ('customer')->paginate(10);
        return view ('agendas.index',compact('agendas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $agendas= new Agenda();
        $customers= customer::all();
        return view ('agendas.create',compact('agendas','customers'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(AgendaRequest $request)
    {
        Agenda::create($request->validated());
        return redirect()->route('agendas.index')->with('success','Agenda ha sido creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $agendas= Agenda::find($id);
        $customers= customer::all();
        return view ('agendas.show',compact('agendas','customers'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $agendas= Agenda::find($id);
        $customers= customer::all();
        return view ('agendas.edit',compact('agendas','customers'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(AgendaRequest $request, int $id)
    {
        $agendas= Agenda::find($id);
        $agendas->update($request->validated());
        return redirect()->route('agendas.index')->with('updated','La agenda ha sido actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $agendas= Agenda::find($id);
        $agendas->delete();
        return redirect()->route('agendas.index')->with('deleted','La agenda ha sido eliminada con éxito');
    }
}
