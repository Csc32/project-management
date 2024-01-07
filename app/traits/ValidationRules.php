<?php

namespace App\traits;

use Illuminate\Validation\Rule;
use App\Models\User;

trait ValidationRules
{
    public $errors = [
        "user_id" => [],
        "names" => [],
        "lastnames" => [],
        "sex" => [],
        "email" => [],
        "tel" => [],
        "pfg" => [],
        "date" => []
    ];
    public function rules(): array
    {

        return [
            'user_id' => [
                'required',
                'min:5',
                Rule::unique('users', 'user_id')
            ],
            'names' => [
                'required',
                'string',
            ],
            'lastnames' => [
                'required',
                'string',
            ],
            'sex' => [
                'required'
            ],
            'email' => [
                'required',
                'email',
                Rule::unique('users', 'email')
            ],
            'telephone_number' => [
                'required',
                'numeric'
            ],
            'pfg_fk' => [
                'required',
            ],
            'date_of_birth' => [
                'required'
            ]
        ];
    }
    public function messages(): array
    {
        return [
            'user_id.required' => 'Debe ingresar una cédula',
            'user_id.min' => 'La cédula es muy corta',
            'user_id.unique' => 'La cédula ya esta registrada',
            'names.required' => 'El nombre es requerido',
            'names.string' => 'El nombre debe ser texto',
            'lastnames.required' => 'El apellido es requerido',
            'sex.required' => 'El sexo es requerido',
            'email.required' => "El correo es requerido",
            'email.unique' => "El correo ya fue registrado",
            'telephone_number.required' => 'El telefono es requerido',
            'telephone_number.numeric' => 'El telefono debe ser númerico',
            'pfg_fk.required' => "Debe seleccionar un pfg",
            'date.required' => "Debe indicar la fecha de nacimiento"
        ];
    }
}
