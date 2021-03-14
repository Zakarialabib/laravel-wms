<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\Pricing;

class Pricings extends Component
{
    use WithPagination;

    public $pricing, $city, $region, $price;
    public $search;
    protected $pricings;
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
        $this->pricings = Pricing::paginate(5);

        return view('livewire.pricings', [
            'pricings' => $this->search === null ?
            Pricing::paginate(5) :
            Pricing::where('region', 'like', '%' . $this->search . '%')
                ->orWhere('city', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')->paginate(5)
        ]);    }

  /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()

    {
        $this->resetInputFields();
        $this->openModal();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function openModal()
    {
        $this->isOpen = true;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    public function closeModal()
    {
        $this->isOpen = false;
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->city = '';
        $this->region = '';
        $this->price = '';
    }
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
            'city' => $this->title,
            'region' => $this->body,
            'price' => $this->slug, 
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
     * @var array
     */
    public function delete($id)

    {
        Pricing::find($id)->delete();
        session()->flash('message', 'Pricing Deleted Successfully.');

    }
 
}
