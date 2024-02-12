<?php

namespace App\Livewire\Roles;

use App\Models\Roles;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class RolTable extends Component
{
    use WithPagination;

    public string $searchValue = '';

    #[On('searching')]
    public function handleSearching($value)
    {
        $this->searchValue = $value;
    }

    public function render()
    {

        $roles = Roles::with('users')
            ->when($this->searchValue !== '', function ($query) {
                $query->where('roles.name', 'like', $this->searchValue.'%');
            })
            ->paginate(5);

        return view('livewire.roles.rol-table', ['roles' => $roles]);
    }
}
