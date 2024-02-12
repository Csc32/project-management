<?php

namespace App\Livewire;

use App\Models\Pfgs;
use Illuminate\Database\Eloquent\Builder;
use Livewire\Attributes\On;
use Livewire\Component;
use Livewire\WithPagination;

class PfgTable extends Component
{
    use WithPagination;

    public $btnTitle = 'Agregar';

    public $searchValue = '';

    #[On('searching')]
    public function handleSearching($value)
    {
        $this->searchValue = $value;
    }

    public function edit($id)
    {
        return $this->dispatch('edit', $id);
    }

    #[On('update')]
    public function updated()
    {
        return $this->render();
    }

    #[On('save')]
    public function created()
    {
        return $this->render();
    }

    public function delete($id)
    {
        $pfg = Pfgs::find($id);
        $this->authorize('delete', $pfg);
        $pfgName = $pfg->name;
        try {
            $pfg->delete();
        } catch (\Illuminate\Database\QueryException $e) {
            return $this->dispatch('error', ['message' => "Hubo un error al eliminar el PFG: $pfgName, verifique que no tenga estudiantes"]);
        }

        return $this->dispatch('delete', message: "El PFG $pfgName fue eliminado");
    }

    public function render()
    {
        $pfgs = Pfgs::query()
            ->when(
                $this->searchValue,
                function (Builder $query) {
                    $query->where('name', 'like', $this->searchValue.'%');
                }
            )
            ->paginate(10);

        return view('livewire.pfg-table', ['pfgs' => $pfgs]);
    }
}
