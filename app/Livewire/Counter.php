<?php

namespace App\Livewire;

use Livewire\Component;

class Counter extends Component
{
    public $counter = 1;

    public $todos = [];

    public $todo;

    public function render()
    {
        return view('livewire.counter');
    }
    public function increment()
    {
        $this->counter++;
    }

    public function decrement()
    {
        $this->counter--;
    }

    public function save()
    {
        array_push($this->todos, $this->todo);

    }


}
