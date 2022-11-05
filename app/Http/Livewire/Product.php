<?php

namespace App\Http\Livewire;

use App\Models\Products;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Product extends Component
{
    use WithPagination;

    private $products;
    public $product_id;
    public $search;
    public $user_id;
    public $name;
    public $price;
    public $description;
    public $deleteId;

    protected $queryString = ['search'];

    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
        $this->products = Products::paginate(5);

        return view('livewire.product', [
            'products' => $this->search === null
                ? Products::paginate(5)
                : Products::where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%')
                    ->orderBy('created_at', 'desc')->paginate(5)
        ]);
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'price' => 'required|integer|min:0',
            'description' => 'required',
            'user_id' => '',
        ]);
        Products::updateOrCreate(['id' => $this->product_id], [
            'name' => $this->name,
            'price' => $this->price,
            'description' => $this->description,
            'user_id' => $this->user_id  = Auth::id(),
        ]);

        session()->flash(
            'message',
            $this->product_id ? 'Product Updated Successfully.' : 'Product Created Successfully.'
        );
    }

    public function deleteId($id)
    {
        $this->deleteId = $id;
        session()->flash('message', 'Product Deleted Successfully.');
    }

    public function delete()
    {
        Products::find($this->deleteId)->delete();
        session()->flash('message', 'Product Deleted Successfully.');
    }
}
