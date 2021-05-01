<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Deliveries;
use App\Models\Products;
use App\Models\User;
use App\Models\Sales;
use Illuminate\Http\Request;
use Livewire\WithPagination;
use Illuminate\Support\Facades\Auth;

class Delivery extends Component
{
    use WithPagination;

    public $delivery_id, $search, $sale_id, $user_id, $tracking_number, $recipient, $address, $expected_arrival, $actual_arrival, $status, $description, $price, $deleteId;
    protected $queryString = ['search'];

    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    public function render()
    {
     ///   $this->sales = Deliveries::query()
     /// ->where('user_id', Auth::id());
     
     $products = Products::all();
     $users = User::all();
     $sales = Sales::all();
     
     $this->deliveries = Deliveries::paginate(5);
        return view('livewire.delivery', compact('sales','users','products'),[
            'deliveries' => $this->search === null ?
            Deliveries::paginate(5) :
            Deliveries::where('status', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')->paginate(5)
        ]);
    }

    public function store()
    {
        if (Sales::where('id')) {
        $this->validate([
            'sale_id' => 'required|unique:deliveries',
            'tracking_number' => 'required',
            'recipient' => 'required',
            'address' => 'required',
            'price' => 'required',
            'expected_arrival' => 'required|date|after:tomorrow',
            'actual_arrival' => 'nullable|date|after:expected_arrival',
            'status' => 'required',
            'description' => 'required',
            'user_id' => ''
        ]);
        Deliveries::updateOrCreate(['id' => $this->delivery_id], [
            'sale_id' => $this->sale_id,
            'tracking_number' => $this->tracking_number,
            'recipient' => $this->recipient,
            'address' => $this->address,
            'price' => $this->price,
            'expected_arrival' =>$this->expected_arrival,
            'actual_arrival' => $this->actual_arrival,
            'status' => $this->status,
            'description' => $this->description, 
            'user_id' => $this->user_id  = Auth::id(), 
        ]);
        return  session()->flash('message', 
            $this->delivery_id ? 'Deliveries Created Successfully' : 'Product Created Successfully.');
        } else {
            return  back()->with('error', 'Deliveries ID doesn\'t exist!');
        }
    }

    /**
     * The attributes that are mass assignable.
     *
     * @return response()
     */
    public function deleteId($id)

    {
        $this->deleteId = $id;
        session()->flash('message', 'Delivery Deleted Successfully.');

    }

      /**
     * The attributes that are mass assignable.
     *
     * @return response()
     */
    public function delete()
    {
        Deliveries::find($this->deleteId)->delete();
        session()->flash('message', 'Delivery Deleted Successfully.');

    }
}
