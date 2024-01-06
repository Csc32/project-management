<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Alert extends Component
{
    public $message = '';
    public $show = 'hidden';

    #[On('created')]
    public function handleCreated($message)
    {
        $this->message = $message;
        $this->show = "";
    }

    #[On('delete')]
    public function handleDeleted($message)
    {
        $this->message = $message;
        $this->show = "";
    }
    public function close()
    {
        $this->show = "hidden";
    }
    public function render()
    {
        return view('livewire.alert');
    }
}
