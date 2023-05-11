<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subject;

class SubjectController extends Controller
{
    //
    public function index(){
        $asignaturas=Subject::where('ing',auth()->user()->ing)->get();
        return view ('asignaturas', compact('asignaturas'));
    }

    public function show($id){
        $asignatura=Subject::find($id);
        return view('asignaturaDetalles', compact('asignatura'));
    }
}
