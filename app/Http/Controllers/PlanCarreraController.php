<?php

namespace App\Http\Controllers;

use App\Models\Carreras;
use App\Models\PlanesCarrera;
use Illuminate\Http\Request;
use Validator;
class PlanCarreraController extends Controller
{
    public function index()
    {
        $plancarreras = PlanesCarrera::all();
        $carreras = Carreras::all();

        return view('planes-carrera.index', compact('plancarreras', 'carreras'));
    }

    public function create()
    {
        $carreras = Carreras::all();
        return view('planes-carrera.create', compact('carreras'));
    }

    public function store(Request $request)
    {
      
        $this->validate($request, [
            'nombre' => 'required|max:100',
            'codigo' => 'required|max:20',
            'creditos' => 'required|max:20',
            'periodos' => 'required|max:20',
            
        ]);

        $plancarrera = new PlanesCarrera();
        $plancarrera->nombre = $request->nombre;
        $plancarrera->codigo = $request->codigo;
        $plancarrera->periodos = $request->periodos;
        $plancarrera->creditos = $request->creditos;
        $plancarrera->estado = $request->estado;
        $plancarrera->carreras_id = $request->carrera;

        $plancarrera->save();
        session()->flash('status');
        $carreras = Carreras::all();
        return view('planes-carrera.create', compact('carreras'));
    }
}
