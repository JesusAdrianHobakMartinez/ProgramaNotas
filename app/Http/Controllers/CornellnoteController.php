<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cornellnote;

class CornellnoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $notas=Cornellnote::where('user_id',auth()->user()->id)->get();
        return view ('notas', compact('notas'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $nota=Cornellnote::find($id);
        return view('notaDetalles', compact('nota'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
