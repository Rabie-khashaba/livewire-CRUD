<?php

namespace App\Livewire;

use App\Models\Customer;
use Livewire\Component;
use Livewire\WithPagination;

class Customers extends Component
{
    use WithPagination;

//    public $customers ;
    public $search;
    protected $paginationTheme = "bootstrap";

//    public function mount(){
//       $this->customers = Customer::all();
//    }

    public function deleteCustomer($id)
    {
        $customer = Customer::find($id);
        $customer->delete();

        session()->flash('message', 'Customer deleted successfully.');
        return redirect()->to('/customers');
    }
    public function render()
    {

        //search
        if (! $this->search) {
            $customers = Customer::paginate(10);
        }else{
            $customers = Customer::where('name', 'like', '%' . $this->search . '%')->paginate(10);
        }

        return view('livewire.customers', ['customers' => $customers]);
    }
}
