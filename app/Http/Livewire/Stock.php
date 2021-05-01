<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Stocks;
use App\Models\Products;
use Illuminate\Support\Facades\Auth;

class Stock extends Component
{
    use WithPagination;

    public $stock_id, $product_id, $user_id ,$quantity ,$search,$deleteId;
    protected $queryString = ['search'];


    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {

     ///   $this->stock = Stock::query()
     /// ->where('user_id', Auth::id());

     
     $products = Products::all();
     //  $products = DB::table('products')->pluck('name');
     //$products = Products::all();
     //  \dd($product_id);
     
        $this->stocks = Stocks::query()
        ->paginate(5);
        return view('livewire.stock',compact('products'),
      [
            'stocks' => $this->search === null ?
            Stocks::paginate(5) :
            Stocks::where('product_id', 'like', '%' . $this->search . '%')
                ->orWhere('quantity', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')
        ]);
     
    }

    public function store()
    {
        $this->validate([
            'product_id' => 'required|unique:stocks',
            'quantity' => 'required|integer|min:0',
            'user_id' => '',
        ]);
        Stocks::updateOrCreate(['id' => $this->stock_id], [
            'product_id' => $this->product_id,
            'quantity' => $this->quantity,
            'user_id' => $this->user_id  = Auth::id(), 
        ]);
        session()->flash('message', 
            $this->stock_id ? 'Product Updated Successfully.' : 'Product Created Successfully.');

    }

       /**
     * The attributes that are mass assignable.
     *
     * @return response()
     */
    public function deleteId($id)

    {
        $this->deleteId = $id;
        session()->flash('message', 'Stock Deleted Successfully.');
    }
    
      /**
     * The attributes that are mass assignable.
     *
     * @return response()
     */
    public function delete()

    {
        Stocks::find($this->deleteId)->delete();
        session()->flash('message', 'Stock Deleted Successfully.');

    }

   

}
