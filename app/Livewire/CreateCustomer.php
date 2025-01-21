<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class CreateCustomer extends Component
{

    public $name, $email, $phone;


    public function save()
    {
//        dd($this->email,$this->name,$this->phone);

        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|unique:customers|max:255',
        ]);

        Customer::create([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        $this->reset('name', 'email', 'phone');

        session()->flash('add', 'Customer created successfully.');


    }
    public function render()
    {
        return view('livewire.create-customer');
    }
}
