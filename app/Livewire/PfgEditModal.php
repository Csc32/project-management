<?php

namespace App\Livewire;

use App\Models\Pfgs;
use App\traits\ValidationRules;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;
use Livewire\Component;

class PfgEditModal extends Component
{
    use ValidationRules;

    public $attribute = 'hidden';

    public $name;

    public $btnTitle = 'Agregar';

    public $errorsPfg;

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                Rule::unique('pfgs', 'name'),
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.unique' => 'El nombre ya esta registrado',
        ];
    }

    #[On('edit')]
    public function edit($isHidden = true)
    {
        if ($isHidden) {
            return $this->attribute = '';
        }

        return $this->attribute = 'hidden';
    }

    #[On('close')]
    public function close()
    {
        $this->attribute = 'hidden';
        $this->errorsPfg = [];
    }

    public function save()
    {
        $data = [
            'name' => $this->name,
        ];

        $validateData = Validator::make($data, $this->rules(), $this->messages());

        if ($validateData->fails()) {
            $this->errorsPfg = $validateData->errors()->get('name');
        }

        if ($validateData->passes()) {
            $validated = $validateData->validated();
            $pfg = Pfgs::create(['name' => strtoupper($validated['name'])]);
            $this->resetForm();

            return $this->dispatch('save', message: 'Pfg Guardado correctamente');
        }
    }

    public function resetForm()
    {

        $this->attribute = 'hidden';
        $this->name = '';
        $this->errors = [];
    }

    public function render()
    {
        return view('livewire.pfg-edit-modal');
    }
}
