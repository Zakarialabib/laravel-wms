<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Products;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\Deliveries;
use App\Models\Setting;

class Sale extends Component
{
    use WithPagination;

    public $saleId, $product_id ,$user_id, $quantity ,$status;
    public $search;
    protected $updatesQueryString = ['search'];


    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
     ///   $this->sales = Sales::query()
        /// ->where('user_id', Auth::id());

        $deliveries = Deliveries::all();
        $products = Products::all();
        $users = User::all();
        $settings = Setting::all();

        $this->sales = Sales::paginate(5);
        return view('livewire.sale', compact('settings','users','products','deliveries'),[
            'sales' => $this->search === null ?
            Sales::paginate(5) :
            Sales::where('status', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')->paginate(5)
        ]);
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'product_id' => 'required',
            'user_id' => 'required',
            'quantity' => 'required',
            'status' => 'required',
        ]);
        Sales::create($validatedDate);
        return back()->with('message', 'Sales Created Successfully.');
       
    }
}
