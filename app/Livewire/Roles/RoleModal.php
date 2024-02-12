<?php

namespace App\Livewire\Roles;

use App\Models\Permissions;
use App\traits\ValidationRules;
use Illuminate\Validation\Rule;
use Livewire\Attributes\On;
use Livewire\Component;

class RoleModal extends Component
{
    use ValidationRules;

    public string $attribute = 'hidden';

    public string $name;

    public $btnTitle = 'Agregar';

    public $roleErrors;

    public array $arrayPermi = [];

    public $permissions = [];

    public $id;

    public function mount()
    {
        $permissions = Permissions::all();
        $this->permissions = $permissions;
    }

    public function rules(): array
    {
        return [
            'name' => [
                'required',
                'string',
                Rule::unique('pfgs', 'name'),
            ],
            'permission' => [
                'string',
            ],
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'El nombre es requerido',
            'name.unique' => 'El nombre ya esta registrado',
            'permission.string' => 'El nombre debe ser un texto valido',
        ];
    }

    #[On('show')]
    public function show($isHidden = true)
    {
        if ($isHidden) {
            $this->name = '';
            $this->btnTitle = 'Agregar';

            return $this->attribute = '';
        }

        return $this->attribute = 'hidden';
    }

    #[On('close')]
    public function close()
    {
        $this->attribute = 'hidden';
        $this->roleErrors = [];
    }

    public function render()
    {
        return view('livewire.roles.role-modal');
    }
}
