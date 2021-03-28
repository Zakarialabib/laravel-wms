<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Pricing;

class Pricings extends Component
{
    use WithPagination;

    public $pricing_id, $city, $region, $price , $deleteId;
    public $search;
    protected $updatesQueryString = ['search'];

    public function mount(): void
{
    $this->search = request()->query('search', $this->search);

}
       /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()

    {
        $this->pricings = Pricing::paginate(10);

        return view('livewire.pricings', [
            'pricings' => $this->search === null ?
            Pricing::paginate(10) :
            Pricing::where('region', 'like', '%' . $this->search . '%')
                ->orWhere('city', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')->paginate(10)
        ]);    }


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'city' => 'required',
            'region' => 'required',
            'price'=>'required', 
        ]);
        Pricing::updateOrCreate(['id' => $this->pricing_id], [
            'city' => $this->city,
            'region' => $this->region,
            'price' => $this->price, 
        ]);
        session()->flash('message', 
            $this->pricing_id ? 'Pricing Updated Successfully.' : 'Pricing Created Successfully.');
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $pricings = Pricing::findOrFail($id);
        $this->pricing_id = $id;
        $this->city = $pricings->city;
        $this->region = $pricings->region;
        $this->price = $pricings->price;
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @return response()
     */
    public function deleteId($id)

    {
        $this->deleteId = $id;
        session()->flash('message', 'Pricing Deleted Successfully.');

    }

         /**
     * The attributes that are mass assignable.
     *
     * @return response()
     */
    public function delete()

    {
        Pricing::find($this->deleteId)->delete();
        session()->flash('message', 'Pricing Deleted Successfully.');

    }
 
}
