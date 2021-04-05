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
use App\Http\Livewire\Field;

class Sale extends Component
{
    use WithPagination;

    public $saleId, $product_id ,$user_id, $quantity ,$status, $search;
    protected $queryString = ['search'];
    public $updateMode = false;
    public $inputs = [];
    public $i = 1;



    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function add($i)
    {
        $i = $i + 1;
        $this->i = $i;
        array_push($this->inputs ,$i);
    }

    public function remove($i)
    {
        unset($this->inputs[$i]);
    }

    public function render()
    {
     ///   $this->sales = Sales::query()
        /// ->where('user_id', Auth::id());

        $deliveries = Deliveries::all();
        $products = Products::all();
        $users = User::all();
        $settings = Setting::all();

        $this->sales = Sales::paginate();
        return view('livewire.sale', compact('settings','users','products','deliveries'),[
            'sales' => $this->search === null ?
            Sales::paginate() :
            Sales::where('status', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')->paginate()
        ]);
    }

    private function resetInputFields(){
        $this->product_id = '';
        $this->quantity = '';
    }


    public function store()
    {
        $validatedDate = $this->validate([
            'product_id.0' => 'required',
            'quantity.0' => 'required',
            'product_id.*' => 'required',
            'quantity.*' => 'required',
            'user_id' => 'required',
            'status' => 'required',
        ]);
        Sales::create($validatedDate);
       
        foreach ($this->product_id as $key => $value) {
            Sales::create(['product_id' => $this->product_id[$key], 'quantity' => $this->quantity[$key]]);
        }

        $this->inputs = [];
        $this->resetInputFields();
      
        return back()->with('message', 'Sales Created Successfully.');
       
    }
}
