<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FrontendSections;
use Livewire\WithFileUploads;

class Section2 extends Component
{
    use WithFileUploads;

    public $frontsections, $user_id, $service_title, $service_subtitle ,$service_image, $section_type,$deleteId;
    
    protected $rules = [
        'service_title' => 'required',
        'service_subtitle' => 'required',
        'service_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'section_type' => '',
    ];

    public function create()
    {
        $this->validate();
        $filename = $this->image->store("/");
        FrontendSections::create([
            'service_title' => $this->service_title,
            'service_subtitle' =>  $this->service_subtitle,
            'service_image' => $this->service_image,
        ]);

        // FrontendSections::(['id' => $this->frontsections], [
        //    'offer_title' => $this->offer_title,
        //     'offer_subtitle' => $this->offer_subtitle,
        //     'offer_image' => $filename,
        // ]);
        session()->flash('message', 
            $this->frontsections ? 'Product Updated Successfully.' : 'Product Created Successfully.');
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
