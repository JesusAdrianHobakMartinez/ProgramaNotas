<?php

namespace App\Http\Controllers;
use App\Models\Cornellnote;
use App\Models\Subject;
use Illuminate\Http\Request;

class CornellnoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(){
        $notas=Cornellnote::where('user_id',auth()->user()->id)->get();
        $asignaturas=Subject::where('ing',auth()->user()->ing)->get();
        return view ('notas', compact('notas','asignaturas'));
    }

    public function show($id){
        $nota=Cornellnote::find($id);
        return view('notaDetalles', compact('nota'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //

        $asignatura=Subject::find($request->id);
        return view("cornellnote.create", compact('asignatura'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $nuevanota = new Cornellnote();
        $nuevanota -> id = $request -> id;
        $nuevanota -> titulo = $request  -> titulo;
        $nuevanota -> ideas = $request -> ideas;
        $nuevanota -> notas = $request -> notas;
        $nuevanota -> resumen = $request -> resumen;
        $nuevanota -> user_id = auth()->user()->id;
        $nuevanota -> topic_id = $request -> topic;
        $nuevanota -> save();
        return redirect("/notas");
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $nota=Cornellnote::find($id);
        return view('cornellnote.edit', compact('nota'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        //
        $validatedData = $request->validate([
            'ideas' => 'required',
            'resumen' => 'required',
        ]);
        $notaupdate = Cornellnote::find($id);
        $notaupdate -> titulo = $request  -> titulo;
        $notaupdate -> ideas = $request -> ideas;
        $notaupdate -> notas = $request -> notas;
        $notaupdate -> resumen = $request -> resumen;
        $notaupdate -> user_id = auth()->user()->id;
        $notaupdate -> topic_id = $request -> topic;
        $notaupdate -> save();
        return redirect("/notas");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $nota=Cornellnote::find($id);
        $nota->delete();
        return redirect('/notas')->with('exito', 'Eliminación exitosa');
    }
}

