<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Stocks;
use App\Models\Products;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class Stock extends Component
{
    use WithPagination;

    public $stock_id, $product_id ,$quantity, $product;
    public $search;
    protected $updatesQueryString = ['search'];


    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'product_id' => 'required|unique:stocks',
            'quantity' => 'required|integer|min:0',
        ]);
        Stocks::create($validatedDate);
        return back()->with('message', 'Stock Created Successfully.');
       
    }

    public function render()
    {

     ///   $this->stock = Stock::query()
     /// ->where('user_id', Auth::id());

     $this->stocks = Stocks::paginate(5);

     $products = Products::all();
    //  $products = DB::table('products')->pluck('name');
      
    //$products = Products::all();
      //  \dd($product_id);
    
        return view('livewire.stock',compact('products'),
      [
            'stocks' => $this->search === null ?
            Stocks::paginate(5) :
            Stocks::where('product_id', 'like', '%' . $this->search . '%')
                ->orWhere('quantity', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')
        ]);
     
    }

   

}
