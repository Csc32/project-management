<?php

namespace App\Livewire;

use App\Models\Pfgs;
use Livewire\Component;
use Livewire\WithPagination;

class PfgTable extends Component
{
    use WithPagination;
    public function render()
    {
        $pfgs = Pfgs::paginate(8);
        return view('livewire.pfg-table', ['pfgs' => $pfgs]);
    }
}