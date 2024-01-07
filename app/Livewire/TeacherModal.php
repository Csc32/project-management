<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\User;
use App\traits\ValidationRules;
use Illuminate\Support\Facades\Validator;

class TeacherModal extends Component
{
    use ValidationRules;
    public $attribute = 'hidden';

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
        $this->resetForm();
        $this->errors = [];
    }
    public function save()
    {
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
        //validate depending of if an update or new user
        $validator = Validator::make($data, $this->rules(), $this->messages());
        if (isset($this->id) && $validator->passes()) {
            //save the validated data
            $validated = $validator->validated();
            $user = User::find($this->id);
            $user->user_id = $validated['user_id'];
            $user->names = $validated['names'];
            $user->lastnames =   $validated['lastnames'];
            $user->sex = $validated['sex'];
            $user->email = $validated['email'];
            $user->telephone_number = $validated['telephone_number'];
            $user->pfg_fk = $validated['pfg_fk'];
            $user->date_of_birth = $validated['date_of_birth'];
            $user->save();
            $this->resetForm();
            return $this->dispatch("updatedTeacher");
        }
        if (isset($this->id) && $validator->fails()) {
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

        if (!isset($this->id) && $validator->passes()) {
            $validated = $validator->validated();
            $user = User::create([
                "user_id" =>  $validated['user_id'],
                "names" => $validated['names'],
                "lastnames" => $validated['lastnames'],
                "sex" => $validated['sex'],
                'email' =>  $validated['email'],
                'telephone_number' => $validated['telephone_number'],
                "password" => bcrypt($validated['user_id']),
                "pfg_fk" => $validated['pfg_fk'],
                'date_of_birth' => $validated['date_of_birth'],
                "rol_fk" => 2
            ]);
            $this->resetForm();
            return  $this->dispatch("createdTeacher", message: "Profesor Añadido correctamente");
        }
        if (!isset($this->id) && $validator->fails()) {
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
    public function updated($errors = null)
    {
        if (!isset($errors)) {
            $this->close();
            return $this->resetForm();
        }
        return $this->attribute = "";
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
        $this->id = null;
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
