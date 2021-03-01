<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Stocks;
use Illuminate\Http\Request;

class Stock extends Component
{
    use WithPagination;

    public $stockId, $product_id ,$quantity;
    public $search;
    protected $updatesQueryString = ['search'];


    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
     ///   $this->stock = Stock::query()
        /// ->where('user_id', Auth::id());

        $this->stock = Stocks::all();
        return view('livewire.stock',[
            'stock' => $this->search === null ?
            Stocks::paginate() :
            Stocks::where('product_id', 'like', '%' . $this->search . '%')
                ->orWhere('quantity', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')
        ]);
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'product_id' => 'required',
            'quantity' => 'required',
        ]);
        Stocks::create($validatedDate);
        return back()->with('message', 'Stock Created Successfully.');
       
    }

}
