<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use App\Models\Products;

class Product extends Component
{
    use WithPagination;

    public $productId, $name ,$price, $description;
    public $search;
    protected $updatesQueryString = ['search'];


    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
     ///   $this->products = Products::query()
        /// ->where('user_id', Auth::id());

        $this->products = Products::all();
        return view('livewire.product',[
            'products' => $this->search === null ?
            Products::paginate() :
            Products::where('name', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')
        ]);
    }

    public function store()
    {
        $validatedDate = $this->validate([
            'name' => 'required',
            'price' => 'required',
            'description' => 'required',
        ]);
        Products::create($validatedDate);
        return back()->with('message', 'Products Created Successfully.');
       
    }
}
