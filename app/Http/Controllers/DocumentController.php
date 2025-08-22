<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Document;
use App\Http\Requests\DocumentRequest;


class DocumentController
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $documents = Document::latest()->paginate(10);
        return view('documents.index',compact('documents'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $documents= new Document();
        return view('documents.create',compact('documents'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(DocumentRequest $request)
    {
        Document::create ($request->validated());
        return redirect()->route('documents.index')->with('success','Documento ha sido creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(int $id)
    {
        $documents= Document::find($id);
        return view('documents.show',compact('documents'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(int $id)
    {
        $documents= Document::find($id);
        return view ('documents.edit',compact('documents'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(DocumentRequest $request, int $id)
    {
        $documents= Document::find($id);
        $documents->update($request->validated());
        return redirect()->route('documents.index')->with('updated','Documento ha sido actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(int $id)
    {
        $documents= Documents::find($id);
        $documents->delete();
        return redirect()->route('documents.index')->with('deleted','Documento ha sido eliminado con éxito');
    }
}
