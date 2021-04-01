<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Pricing;

class PricingTable extends Component
{
    use WithPagination;
    
    public $city, $region, $price, $search;
    protected $pricings;
    protected $queryString = ['search'];

    public function mount(): void
{
    $this->search = request()->query('search', $this->search);

}
public function render()
{
    $this->pricings = Pricing::paginate();
    
    return view('livewire.pricing-table', [
        'pricings' => $this->search === null ?
        Pricing::paginate(5) :
        Pricing::where('region', 'like', '%' . $this->search . '%')
            ->orWhere('city', 'like', '%' . $this->search . '%')
            ->orderBy('created_at', 'desc')->paginate(5)
    ]);
}


}
