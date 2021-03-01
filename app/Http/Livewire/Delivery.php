<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use App\Models\Deliveries;
use App\Models\Products;
use App\Models\User;
use App\Models\Sales;


class Delivery extends Component
{
    use WithPagination;

    public $deliveryId, $sale_id , $tracking_number, $recipient, $address, $expected_arrival, $actual_arrival, $status,$description,$price;
    public $search;
    protected $updatesQueryString = ['search'];


    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
     ///   $this->sales = Deliveries::query()
        /// ->where('user_id', Auth::id());

        $deliveries = Deliveries::all();
        $products = Products::all();
        $users = User::all();
        $sales = Sales::all();

        $this->sales = Deliveries::all();
        return view('livewire.delivery', compact('sales','users','products','deliveries'),[
            'sales' => $this->search === null ?
            Deliveries::paginate() :
            Deliveries::where('status', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')
        ]);
    }

    public function store()
    {
        if (Sales::where('id')) {
            $validatedDate = $this->validate([
            'sale_id' => 'required|unique:deliveries',
            'tracking_number' => 'required',
            'recipient' => 'required',
            'address' => 'required',
            'price' => 'required',
            'expected_arrival' => 'required|date|after:tomorrow',
            'actual_arrival' => 'nullable|date|after:expected_arrival',
            'status' => 'required',
            'description' => 'required'
        ]);
        Deliveries::create($validatedDate);
        return back()->with('message', 'Deliveries Created Successfully.');
    } else {
        return  back()->with('error', 'Sale ID doesn\'t exist!');
    }
  }
}
