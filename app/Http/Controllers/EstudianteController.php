<?php

namespace App\Http\Controllers;

use App\Models\Carreras;
use App\Models\Estudiante;
use App\Models\PlanesCarrera;
use Illuminate\Http\Request;

class EstudianteController extends Controller
{
    public function index()
    {
        $estudiantes = Estudiante::all();
        return view('estudiante.show',compact('estudiantes'));
    }

    public function create()
    {
        $carreras= Carreras::all();
        $planes=PlanesCarrera::all();
        return view('estudiante.create', compact(['carreras','planes']));
    }

    
}
