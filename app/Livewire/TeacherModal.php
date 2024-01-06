<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\On;
use App\Models\User;

class TeacherModal extends Component
{
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
            return $this->dispatch("updatedTeacher");
        }
        //save data in an array_assoc
        $user = User::create([
            "user_id" => $this->user_id,
            "names" => strtoupper($this->names),
            "lastnames" => strtoupper($this->lastnames),
            "sex" => $this->sex, 'email' =>  $this->email,
            'telephone_number' => $this->tel,
            "password" => bcrypt($this->user_id),
            "pfg_fk" => $this->pfg,
            'date_of_birth' => $this->date,
            "rol_fk" => 2
        ]);
        return  $this->dispatch("created", message: "Profesor Añadido correctamente");
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
    public function render()
    {
        return view('livewire.teacher-modal');
    }
}
