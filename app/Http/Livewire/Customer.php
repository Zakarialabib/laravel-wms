<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Customers;
use Illuminate\Http\Request;

class Customer extends Component
{
    use WithPagination;

    public $name;
    public $email;
    public $phone;
    public $address;
    public $status;
    public $deleteId;
    public $search;
    protected $queryString = ['search'];
    public $customer;
    private $customers;

    public function mount(Customers $customer)
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        $this->customers = Customers::paginate(5);

        return view('livewire.customer', [
            'customers' => $this->search === null
                ? Customers::paginate(5)
                : Customers::where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('email', 'like', '%' . $this->search . '%')
                    ->orderBy('created_at', 'desc')->paginate(5)
        ]);
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
            'status' => 'required',
        ]);
        Customers::create($validatedDate);
        return back()->with('message', 'Customer Created Successfully.');
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
        session()->flash('message', 'Post Deleted Successfully.');
    }

    public function delete()
    {
        Customers::find($this->deleteId)->delete();
        session()->flash('message', 'Post Deleted Successfully.');
    }
}
