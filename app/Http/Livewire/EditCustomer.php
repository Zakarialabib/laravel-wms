<?php

namespace App\Http\Livewire;

use Livewire\Component;
use LivewireUI\Modal\ModalComponent;
use App\Models\Customers;
use Illuminate\Http\Request;

class EditCustomer extends ModalComponent
{
    public $name ,$email, $phone ,$address, $status;

    public Customers $customer;
    
    public function mount(Request $request , Customers $customer)
    {
        $this->customer = $customer;
    }

    public function render()
    {
        return view('livewire.edit-customer');
    }

    public function edit($id)
    {
        $this->customer = Customers::findOrFail($id);
        $this->customer_id = $id;
        $this->name = $customer->name;
        $this->email = $customer->email;
        $this->address = $customer->address;
    }


    public function update()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $this->customer->update($validatedDate);
        $this->closeModal();
    }

 
}
