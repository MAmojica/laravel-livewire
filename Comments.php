<?php

namespace App\Http\Livewire;

use Livewire\Attributes\Layout;

use Livewire\Component;

use Carbon\Carbon;

class Comments extends Component
{
    public $comments = [
        [
            'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. 
            Similique, fugiat? Eveniet, fugiat deleniti autem assumenda maxime ab, 
            iusto dolor vel eum consequuntur eligendi distinctio nobis consectetur 
            laboriosam quam dolorem aliquid.', 
            'created_at' => '3 min ago',
            'creator' => 'Marco'
        ]
    ];

    public $newComment;

    public function mount()
    {
        $this->newComment = "Test";
    }
 
    public function addComment()
    {
        if ($this->newComment == ''){
            return;
        }
        array_unshift($this->comments, [
            'body' => $this->newComment, 
            'created_at' => Carbon::now()->diffForHumans(),
            'creator' => 'Marco'
        ]);
        $this->newComment = "";
    }

    public function render()
    {
        
        return view('livewire.comments')->layout('layouts.app');
    }
}
