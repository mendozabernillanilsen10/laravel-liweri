<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class CreatePost extends Component
{
    // array m string, int, null
     // colecciones , modelo , dat4time , etc

    public $title,$user;
    public $name ,$email ;

    public function  mount(User $user) {
       // $this->user = User::find($user);
       //$this->user =$user;
       //  $this->name = $user->name;
       //  $this->email= $user->email;

       $this->fill(
        $user->only(["name","email"])
       );
    }
    public function save(){
       // dd($this->name);

    }

    public function render()
    {
        return view('livewire.create-post');
    }


}
