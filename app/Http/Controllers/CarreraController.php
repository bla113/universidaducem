<?php

namespace App\Http\Controllers;

use App\Models\Carreras;
use Illuminate\Http\Request;
use Illuminate\Pagination\Cursor;

class CarreraController extends Controller
{
  public function index()
  {
    $carreras = Carreras::all();

    return view('carreras.index', compact('carreras'));
  }

  public function store(Request $request)
  {
    $carrera = new Carreras();
    $carrera->codigo=$request->codigo;
    $carrera->nombre=$request->nombre;
    $carrera->estado=$request->estado;
    
    $carrera->save();
    session()->flash('status');
    $carreras = Carreras::all();
    return view('carreras.index', compact('carreras'));
  }

  public function edit($id){

    $carrera= Carreras::find($id);
    
    return view('carreras.edit', compact('carrera'));
  }

  public function update(Carreras $carrera,Request $request){
    $carrera->nombre= $request->nombre;
    $carrera->codigo= $request->codigo;
    $carrera->estado= $request->estado;
    $carrera->save();
    session()->flash('status');
    return view('carreras.edit', compact('carrera'));
  }
}
