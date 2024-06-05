<?php

namespace App\Livewire;
use App\Models\User;
use Livewire\Component;

class Test extends Component
{
    public $name;
    public $email;
    public $password;
    public function createusers()
    {
        $this->validate([
            'name'=>'required|min:3|max:25',
            'email'=>'required|email|unique:users',
            'password'=>'required|min:5'
        ]);

        User::create([
            'name'=>$this->name,
            'email'=>$this->email,
            'password'=>$this->password
        ]);
    }

    public function clickfunction()
    {
        dump("you just hit the click me button");
    }
    public function render()
    {
        // $title="khan bhai";
        $users=User::all();
        return view('livewire.test',[
            // 'title' => $title,
            'users' => $users,
        ]);
    }
}
