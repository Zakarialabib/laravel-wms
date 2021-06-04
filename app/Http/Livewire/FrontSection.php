<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FrontendSections;

class FrontSection extends Component
{
    public $frontsections, $deleteId;

    public function render()
    {
        $this->frontsections = FrontendSections::all();
        return view('livewire.front-section');
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
         FrontendSections::find($this->deleteId)->delete();
         session()->flash('message', 'Stock Deleted Successfully.');
 
     }

}
