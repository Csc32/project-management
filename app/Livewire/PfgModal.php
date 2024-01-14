<?php

namespace App\Livewire;

use App\Models\Pfgs;
use Livewire\Component;
use App\traits\ValidationRules;
use Livewire\Attributes\On;

class PfgModal extends Component
{
    use ValidationRules;
    public $attribute = 'hidden';
    public $name;
    public $btnTitle = "Agregar";
    #[On('show')]
    public function show($isHidden = true)
    {
        if ($isHidden) {
            return $this->attribute = "";
        }
        return $this->attribute = "hidden";
    }
    #[On('close')]
    public function close()
    {
        $this->attribute = "hidden";
        $this->errors = [];
    }

    public function save()
    {
        $data = [
            "name" => $this->name
        ];

        $pfgFind = Pfgs::firstOrCreate(['name' => strtoupper($this->name)]);

        if ($pfgFind->wasRecentlyCreated) {
            return $this->dispatch("save", message: "Pfg Guardado correctamente");
        }
    }
    public function resetForm()
    {

        $this->attribute = "";
        $this->name = "";
        $this->errors = [];
    }
    public function render()
    {
        return view('livewire.pfg-modal');
    }
}
