<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Activity;
use App\Models\Lawyer;
use App\Models\ReportModule;

use App\Http\Requests\ActivityRequest;



class ActivityController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $activities= Activity::with ('lawyer','reportmodule')->paginate(10);
        return view ('activities.index',compact('activities'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $activities= new Activity();
        $lawyers= Lawyer::all();
        $reportmodules= ReportModule::all();
        return view ('activities.create',compact('activities','lawyers','reportmodules'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ActivityRequest $request)
    {
        Activity::create($request->validated());
        return redirect()->route('activities.index')->with('success','Actividad ha sido creada con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $activities= Activity::find($id);
        $lawyers= lawyer::all();
        $reports_modules= ReportModule::all();
        return view ('activities.show',compact('activities','lawyers','reports_modules'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $activities= Activity::find($id);
        $lawyers= lawyer::all();
        $reportmodules= ReportModule::all();
        return view ('activities.edit',compact('activities','lawyers','reportmodules'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(ActivityRequest $request, int $id)
    {
        $activities= activity::find($id);
        $activities->update($request->validated());
        return redirect()->route('activities.index')->with('updated','La actividad ha sido actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $activities= activity::find($id);
        $activities->delete();
        return redirect()->route('activities.index')->with('deleted','La actividad ha sido eliminada con éxito');
    }
}
