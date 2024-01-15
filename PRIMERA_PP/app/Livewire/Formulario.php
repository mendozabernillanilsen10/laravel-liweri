<?php

namespace App\Livewire;

use App\Models\Category;
use App\Models\post;
use App\Models\Tag;
use Livewire\Component;

class Formulario extends Component
{
    public $categories, $tags;
    public $category_id ='', $title, $content;
    public $selectedTags = [];
    public $posts;
    public $open  = false;

    public $pos
    public $pos_edith =[
        'category_id' => '',
        'title' =>'',
        'content' => '',
        'tags' =>[]
    ];

    public function edit($posId){
        $this->open=true;
        $post=post::find($posId);
        $this->pos_edith['category_id']=$post->category_id;
        $this->pos_edith['title']=$post->title;
        $this->pos_edith['content']=$post->content;
        $this->pos_edith['tags']=$post->tags->pluck('id')->toArray();
    }


    public function update(){


    }

    public function mount()
    {
        $this->categories = Category::all();
        $this->tags = Tag::all();
        $this->posts =post::all();
    }


    public function save(){
          /* $post=post::create([
            'category_id' => $this->category_id,
            'title' => $this->title,
            'content' => $this->content
            ]);*/

            $post = post::create(
                $this->only('category_id','title','content')
            );
            $post->tags()->attach($this->selectedTags);
            $this->reset(['category_id','title','content','selectedTags']);
            $this->posts =post::all();

        }

    public function render()
    {
        return view('livewire.formulario');
    }


}
