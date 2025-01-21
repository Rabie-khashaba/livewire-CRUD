<?php

namespace App\Livewire;

use \Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Navbar extends Component
{

    public function logout(Request $request)
    {
        // Log the user out
        Auth::logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token
        $request->session()->regenerateToken();

        // Redirect to the login page (or any other page)
        return redirect('/login');
    }
    public function render()
    {
        return view('livewire.navbar');
    }
}
