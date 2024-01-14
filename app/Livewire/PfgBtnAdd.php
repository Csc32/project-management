<?php

namespace App\Livewire;

use Livewire\Component;
use App\traits\ForwardsAttributes;

class PfgBtnAdd extends Component
{
    use ForwardsAttributes;

    public $btnTitle = "Agregar";
    public function mount(...$attrs)
    {
        $this->mapAttributes(...$attrs);
    }

    public function show()
    {
        $this->dispatch('show', ["isHidden" => false]);
    }

    public function render()
    {
        return view('livewire.pfg-btn-add');
    }
}
