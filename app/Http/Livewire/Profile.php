<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Auth;
use App\Models\User;
use Hash;

class Profile extends Component
{
    public $name;
    public $checkPassword, $oldPassword, $password, $confirmPassword;

    public function mount()
    {
        $this->name = Auth::user()->name;
        $this->oldPassword = Auth::user()->password;
    }

    public function render()
    {
        return view('livewire.profile');
    }

    public function saveProfile()
    {
        User::find(Auth::user()->id)->update([
            'name' => $this->name,
        ]);

        $this->dispatchBrowserEvent('showAlert');
    }

    public function savePassword()
    {
        if(password_verify($this->checkPassword, $this->oldPassword))
        {
            $user = User::find(Auth::user()->id)->update([
                'password' => Hash::make($this->password),
            ]);

            $this->oldPassword = $this->password;
            $this->dispatchBrowserEvent('showAlert');
            $this->clearPassword();
        }
    }

    public function clearPassword()
    {
        $this->checkPassword = NULL;
        $this->password = NULL;
        $this->confirmPassword = NULL;
    }

}
