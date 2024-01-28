<?php

namespace App\Livewire\Roles;

use App\Models\Roles;
use Livewire\WithPagination;
use Livewire\Attributes\On;
use Livewire\Component;

class RolTable extends Component
{
    use WithPagination;
    public function render()
    {
        $roles = Roles::paginate(5);
        return view('livewire.roles.rol-table', ["roles" => $roles]);
    }
}
