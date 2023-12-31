<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;
use Livewire\WithPagination;

class TeachersTable extends Component
{

    use WithPagination;

    public function render()
    {
        return view('livewire.teachers-table', ["teachers" => User::with("pfg")->where("rol_fk", 2)->Paginate(10)]);
    }
}
