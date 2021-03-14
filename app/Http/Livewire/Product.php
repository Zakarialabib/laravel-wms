<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use App\Models\Products;

class Product extends Component
{
    use WithPagination;

    public $product_id, $name ,$price, $description;
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

        $this->products = Products::paginate(5);
        return view('livewire.product',[
            'products' => $this->search === null ?
            Products::paginate(5) :
            Products::where('name', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')
        ]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required|integer|min:0',
            'description' => 'required',
        ]);
        Products::updateOrCreate(['id' => $this->product_id], [
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description, 
        ]);
        session()->flash('message', 
            $this->product_id ? 'Product Updated Successfully.' : 'Product Created Successfully.');

    }

      /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)

    {
        Products::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');

    }
}
