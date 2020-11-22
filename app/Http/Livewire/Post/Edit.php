<?php

namespace App\Http\Livewire\Post;

use App\Models\Post;
use Livewire\Component;

class Edit extends Component
{
    public $postId;
    public $title;
    public $content;


    public function mount($id)
    {
        $post = Post::findOrFail($id);

        $this->postId = $post->id;
        $this->title = $post->title;
        $this->content = $post->content;

    }

    public function update()
    {
        $this->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        !empty($this->postId) ? $this->postId : redirect()->route('post.index');
        
        $post = Post::findOrFail($this->postId);

        $post->update([
            'title'     => $this->title,
            'content'   => $this->content
        ]);

        //flash message
        session()->flash('message', 'Data Berhasil Diupdate.');

        //redirect
        return redirect()->route('post.index');

    }

    public function render()
    {
        return view('livewire.post.edit')
        ->extends('layouts.app')
        ->section('content');
    }
}
