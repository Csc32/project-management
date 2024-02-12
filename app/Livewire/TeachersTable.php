<?php

namespace App\Livewire;

use App\Models\User;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class TeachersTable extends Component
{
    use WithPagination;

    public $searchValue = '';

    #[On('updatedTeacher')]
    public function updateTable($message = null, $errors = null)
    {
        return $this->render();
    }

    #[On('createdTeacher')]
    public function created()
    {
        return $this->render();
    }

    public function edit($id)
    {
        $user = User::find($id);

        $this->dispatch('edit', user: $user);
    }

    public function delete($id)
    {
        $user = User::find($id);

        $this->authorize('delete', $user);
        $userName = $user->names;
        $user->delete();

        $this->dispatch('delete', message: "El profesor $userName fue borrado satisfactoriamente");
    }

    #[On('searching')]
    public function handleSearching($value)
    {
        $this->searchValue = $value;
    }

    public function render()
    {
        $teachers = User::with('pfg')->where('rol_fk', 2)->when(
            $this->searchValue != '',
            fn (Builder $query) => $query->where([
                [
                    'names', 'like', $this->searchValue.'%',
                ],
                [
                    'rol_fk', '=', 2,
                ],
            ])->orWhere(
                [
                    [
                        'lastnames', 'like', $this->searchValue.'%',
                    ],
                    [
                        'rol_fk', '=', 2,
                    ],
                ]
            )->orWhere(
                [
                    [
                        'user_id', 'like', $this->searchValue.'%',
                    ],
                    [
                        'rol_fk', '=', 2,
                    ],
                ]
            )
        )->paginate(10);

        return view('livewire.teachers-table', ['teachers' => $teachers]);
    }
}
