<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;

class Customers extends Component
{

    public $customers ;

    public function mount(){
       $this->customers = Customer::all();
    }

    public function deleteCustomer($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        session()->flash('message', 'Customer deleted successfully.');
        return redirect()->to('/customers');
    }
    public function render()
    {
        return view('livewire.customers', ['customers' => $this->customers]);
    }
}
