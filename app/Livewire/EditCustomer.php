<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class EditCustomer extends Component
{


    public $customer_id;
    public $name;
    public $email;
    public $phone;

    public function mount($customer_id)
    {
        $customer = Customer::find($customer_id);
        $this->customer_id = $customer->id;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->phone = $customer->phone;

    }


    public function edit()
    {

        $this->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:customers,email,'.$this->customer_id,
            'phone' => 'required|max:255|unique:customers,phone,'.$this->customer_id,
        ]);

        $customer = Customer::find($this->customer_id)->update([
            'name' => $this->name,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);

        session()->flash('add', 'Post updated successfully!');

        return redirect()->to('/customers');

    }


    public function render()
    {
        return view('livewire.edit-customer');
    }
}
