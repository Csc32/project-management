<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;

class Alert extends Component
{
    public $message = '';
    public $show = 'hidden';
    public $isError = false;
    public $successColors = [
        'alert-container' => "text-green-text bg-green-200 dark:bg-green-700 dark:text-green-100",
        "btn" => "bg-green-200 text-green-text focus:ring-2 focus:ring-green-500 hover:bg-green-500 dark:bg-title-200 dark:text-green-700 dark:hover:bg-gray-700"
    ];
    public $errorColors = [
        'alert-container' => "text-error-600 bg-error-200 dark:bg-error-900 dark:text-error-200",
        "btn" => "bg-error-200 text-error-600 focus:ring-error-600 hover:bg-error-600 "
    ];

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
        dd($message);
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
