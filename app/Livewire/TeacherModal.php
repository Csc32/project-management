<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class TeacherModal extends Component
{
    public $attribute = 'hidden';
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

    public $id;
    public $user_id;
    public $names;
    public $lastnames;
    public $sex;
    public $email;
    public $tel;
    public $pfg;
    public $date;
    public $btnTitle = "Agregar";

    public function rules()
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
    public function messages()
    {
        return [
            'user_id.required' => 'Debe ingresar una cédula',
            'user_id.min' => 'La cédula es muy corta',
            'user_id.unique' => 'La cédula ya esta registrada',
            'names.required' => 'El nombre es requerido',
            'names.string' => 'El nombre debe ser texto',
            'lastnames.required' => 'El apellido es requerido',
            'sex.required' => 'El sexo es requerido',
            'telephone_number.required' => 'El telefono es requerido',
            'telephone_number.numeric' => 'El telefono debe ser númerico',
            'pfg_fk.required' => "Debe seleccionar un pfg",
            'date.required' => "Debe indicar la fecha de nacimiento"
        ];
    }
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
    }
    public function save()
    {
        if (isset($this->id)) {
            $user = User::find($this->id);
            $user->user_id = $this->user_id;
            $user->names = $this->names;
            $user->lastnames =  $this->lastnames;
            $user->sex = $this->sex;
            $user->email = $this->email;
            $user->telephone_number = $this->tel;
            $user->pfg_fk = $this->pfg;
            $user->date_of_birth = $this->date;
            $user->save();
            $this->resetForm();
            return $this->dispatch("updatedTeacher");
        }
        //save data in an array_assoc
        $data = [
            'user_id' => $this->user_id,
            'names' => strtoupper($this->names),
            'lastnames' => strtoupper($this->lastnames),
            'sex' => $this->sex,
            'email' => $this->email,
            'telephone_number' => $this->tel,
            'pfg_fk' => $this->pfg,
            'date_of_birth' => $this->date,
        ];

        $validator = Validator::make($data, $this->rules(), $this->messages());
        if ($validator->passes()) {
            $user = User::create([
                "user_id" => $data['user_id'],
                "names" => $data['names'],
                "lastnames" => $data['lastnames'],
                "sex" => $data['sex'],
                'email' =>  $data['email'],
                'telephone_number' => $data['telephone_number'],
                "password" => bcrypt($data['user_id']),
                "pfg_fk" => $data['pfg_fk'],
                'date_of_birth' => $data['date_of_birth'],
                "rol_fk" => 2
            ]);
            $this->resetForm();
            return  $this->dispatch("createdTeacher", message: "Profesor Añadido correctamente");
        } else {
            $this->attribute = "";
            $this->errors = [
                'user_id' =>  $validator->errors()->get("user_id"),
                'names' =>  $validator->errors()->get("names"),
                'lastnames' =>  $validator->errors()->get("lastname"),
                'sex' =>  $validator->errors()->get("sex"),
                'email' =>  $validator->errors()->get("email"),
                'tel' =>  $validator->errors()->get("tel"),
                'pfgs' =>  $validator->errors()->get("pfg"),
                'date' =>  $validator->errors()->get("date"),
            ];
            return $this->render();
        }
    }
    #[On('updatedTeacher')]
    public function updated()
    {
        $this->close();
    }
    #[On('edit')]
    public function edit($user)
    {
        $this->attribute = "";
        $this->btnTitle = "Editar";
        //binding attribute;

        $this->id = $user['id'];
        $this->user_id = $user['user_id'];
        $this->names = $user['names'];
        $this->lastnames = $user['lastnames'];
        $this->sex = $user['sex'];
        $this->email = $user['email'];
        $this->tel = $user['telephone_number'];
        $this->pfg = $user['pfg_fk'];
        $this->date = $user['date_of_birth'];
    }
    protected function resetForm()
    {
        $this->user_id = '';
        $this->names = '';
        $this->lastnames = '';
        $this->sex = '';
        $this->email = '';
        $this->tel = '';
        $this->pfg = '';
        $this->date = '';
        $this->btnTitle = "Agregar";
        $this->attribute = "hidden";
    }
    public function render($errors = null, $message = null)
    {
        return view('livewire.teacher-modal', [$message => $message]);
    }
}
