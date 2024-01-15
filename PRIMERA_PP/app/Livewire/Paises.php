<?php

namespace App\Livewire;

use Livewire\Component;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class Paises extends Component
{

    public $open = true;
    public $pais ;
    public $paises =[
        'PERU',
        'CHILE'
    ];

    public $active;
    public $count = 0;



    public function save(){
        array_push($this->paises ,$this->pais);
        //$this->pais="";

        $this->reset(["pais"]);
    }
    public function delete($index ){
        unset($this->paises[$index]);

    }
    public function chanseActive($pais)  {

        $this->active = $pais;

    }

    public function render()
    {
        return view('livewire.paises');
    }
    public function incrementer() {
        $this->count++;
    }
    public function recetear (){
        $this->count = 0;
    }
}
