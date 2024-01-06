<?php

namespace App\Livewire;

use Livewire\Component;

class Search extends Component
{
    public string $value = "";

    public function searching()
    {
        $this->dispatch("searching", value: strtoupper($this->value));
    }
    public function render()
    {
        $this->dispatch("searching", value: strtoupper($this->value));
        return view('livewire.search');
    }
}
