<?php

namespace App\Livewire;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Login extends Component
{

    public $email;
    public $password;



    public function login(Request $request)
    {

        $validatedData = $this->validate([
            'email' => 'required|email|max:255',
            'password' => 'required|max:255',
        ]);


        // Attempt to authenticate the user
//        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
//            return redirect('/customers');
//        }
        // or

        if(auth()->attempt($validatedData)) {
            $request->session()->regenerate();
            return redirect('/customers');
        }

        // Return an error message
        session()->flash('error', 'Invalid email or password');


    }

    public function render()
    {
        return view('livewire.login');
    }
}
