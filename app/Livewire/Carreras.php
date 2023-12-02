<?php

namespace App\Livewire;

use App\Models\Carreras as ModelsCarreras;
use Livewire\Component;


class Carreras extends Component
{
    public $carreras;
    public $id,$codigo,$nombre,$estado;
    
    public function render()
    {
        $carreras=Carreras::all();

        return view('livewire.carreras',compact('carreras'));
    }
   

    public function editarCarrera($id){
        
        $carrera= Carreras::find($id);
        $this->id=$id;
        $this->nombre= $carrera->nombre;
        $this->codigo= $carrera->codigo;
        $this->estado= $carrera->estado;

        
    }

   
}
