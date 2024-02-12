<?php

namespace App\Livewire\Roles;

use App\Models\Roles;
use Livewire\Component;
use Livewire\WithPagination;

class RolTable extends Component
{
    use WithPagination;

    public function render()
    {
        $roles = Roles::paginate(5);

        return view('livewire.roles.rol-table', ['roles' => $roles]);
    }
}
