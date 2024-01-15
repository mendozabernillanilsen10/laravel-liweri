<?php

namespace App\Livewire;

use Livewire\Component;
use PhpParser\Builder\Function_;
use PhpParser\Node\Name\FullyQualified;

class Contador extends Component
{
    public $cout = 0;

    public function render()
    {
        return view('livewire.contador');
    }
    public function decrement(){
        if($this->cout !=0 ){
             $this->cout--;
        }

    }
    public function increment($aux ){
        $this->cout += $aux;
    }


}
