<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Sale;

class ShowSale extends Component
{
    public $sale_id, $product_id, $products, $sale_number ,$user_id, $quantity ,$status, $message;

    public function mount($id)
    {
        $this->products = Sale::find($id);
    }

    public function render()
    {
        return view('livewire.show-sale');
    }

    public function store()
    {
        $this->validate([
            'message' => '',
            ]);
    
            Sale::updateOrCreate(['id' => $this->sale_id], [
                'message' => $this->message ,
            ]);
    
    }
}
