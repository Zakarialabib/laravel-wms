<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Products;
use Livewire\WithPagination;
use App\Models\User;
use App\Models\Deliveries;
use App\Models\Setting;
use App\Http\Livewire\Field;
use Illuminate\Support\Facades\Auth;

class Sale extends Component
{
    use WithPagination;

    public $sale_id, $product_id , $sale_number ,$user_id, $quantity ,$status, $search, $deleteId;
    protected $queryString = ['search'];
    public $updateMode = false;
    // public $inputs = [];
    // public $i = 1;

    public function mount(): void
    {
        $this->search = request()->query('search', $this->search);
    }

    // public function add($i)
    // {
    //     $i = $i + 1;
    //     $this->i = $i;
    //     array_push($this->inputs ,$i);
    // }

    // public function remove($i)
    // {
    //     unset($this->inputs[$i]);
    // }

    public function render()
    {
     ///   $this->sales = Sales::query()
        /// ->where('user_id', Auth::id());

        $deliveries = Deliveries::all();
        $products = Products::all();
        $users = User::all();
        $settings = Setting::all();

        $this->sales = Sales::paginate();
        return view('livewire.sale', compact('settings','users','products','deliveries'),[
            'sales' => $this->search === null ?
            Sales::paginate() :
            Sales::where('status', 'like', '%' . $this->search . '%')
                ->orderBy('created_at', 'desc')->paginate()
        ]);
    }

    private function resetInputFields(){
        $this->product_id = '';
        $this->quantity = '';
    }


    public function store()
    {

        $this->validate([
            // 'product_id.0' => 'required',
            // 'quantity.0' => 'required',
            // 'product_id.*' => 'required',
            // 'quantity.*' => 'required',
            'product_id' => 'required',
            'quantity' => 'required',
            'sale_number' => 'required|unique:sales',
            'user_id' => '',
            'status' => 'required',
        ]);
        Sales::updateOrCreate(['id' => $this->sale_id], [
            'product_id' => $this->product_id,
            'quantity' => $this->quantity,
            'status' => $this->status, 
            'sale_number' => $this->sale_number ,
            'user_id' => $this->user_id  = Auth::id(), 
        ]);

       // Sales::create($validatedDate);
       
        // foreach ($this->product_id as $key => $value) {
        //     Sales::create([
        //     'product_id' => $this->product_id[$key], 
        //     'quantity' => $this->quantity[$key]
        //     ]);
        // }

     //   $this->inputs = [];
       //  $this->resetInputFields();
      
       session()->flash('message', 
       $this->sale_id ? 'Sale Updated Successfully.' : 'Sale Created Successfully.');       
    }

     /**
     * The attributes that are mass assignable.
     *
     * @return response()
     */
    public function deleteId($id)

    {
        $this->deleteId = $id;
        session()->flash('message', 'Sale Deleted Successfully.');
    }
    
      /**
     * The attributes that are mass assignable.
     *
     * @return response()
     */
    public function delete()

    {
        Sales::find($this->deleteId)->delete();
        session()->flash('message', 'Sale Deleted Successfully.');

    }
}
