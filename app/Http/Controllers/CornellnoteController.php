<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Cornellnote;

class CornellnoteController extends Controller
{
    //
    //
    public function index(){
        $notas=Cornellnote::where('user_id',auth()->user()->id)->get();
        
        return view ('notas', compact('notas'));
    }

    public function show($id){
        $nota=Cornellnote::find($id);
        return view('notaDetalles', compact('nota'));
    }
}
