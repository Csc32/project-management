<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class TeacherModal extends Component
{
    public $title = "En el modal";
    public $attribute = 'hidden';

    #[On('show')]
    public function show($isHidden = true)
    {

        if ($isHidden) {
            return $this->attribute = "";
        }
        return $this->attribute = "hidden";
    }
    public function close()
    {
        $this->attribute = "hidden";
    }
    public function render()
    {
        return view('livewire.teacher-modal');
    }
}
