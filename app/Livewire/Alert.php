<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Alert extends Component
{
    public $message = '';
    public $show = 'hidden';
    public $isError = false;
    #[On('createdTeacher')]
    public function handleCreated($message)
    {
        $this->message = $message;
        $this->show = "";
    }

    #[On('updatedTeacher')]
    public function handleUpdated($message)
    {
        $this->message = $message;
        $this->show = "";
    }

    #[On('save')]
    public function handleSave($message)
    {
        $this->message = $message;
        $this->show = "";
    }

    #[On('update')]
    public function handleUpdate($message)
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
    #[On('error')]
    public function error($error)
    {
        $this->message = $error['message'];
        $this->isError = true;
        $this->show = "";
    }
    public function close()
    {
        $this->show = "hidden";
        $this->isError = false;
    }
    public function render()
    {
        return view('livewire.alert');
    }
}
