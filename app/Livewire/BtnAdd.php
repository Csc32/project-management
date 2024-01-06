<?php

namespace App\Livewire;

use App\traits\ForwardsAttributes;
use Livewire\Component;

class BtnAdd extends Component
{
    use ForwardsAttributes;
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
        return view('livewire.btn-add');
    }
}
