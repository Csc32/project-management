<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class TeacherModal extends Component
{
    public $title = "En el modal";

    #[On('show')]
    public function show($other)
    {
        $this->title = $other;
    }
    public function render()
    {
        return view('livewire.teacher-modal');
    }
}
