<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\FrontendSections;
use Livewire\WithFileUploads;

class Section3 extends Component
{
    use WithFileUploads;

    public $frontsections, $user_id, $offer_title, $offer_subtitle ,$offer_image,$service_title, $service_subtitle ,$service_image, $section_type,$deleteId;
    
    protected $rules = [
        'blog_title' => 'required',
        'blog_subtitle' => 'required',
        'blog_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    ];



    public function create()
    {
        $this->validate();
        FrontendSections::create([
            'offer_title' => $this->offer_title,
            'offer_subtitle' =>  $this->offer_subtitle,
            'offer_image' => $this->offer_image,
        ]);

        // FrontendSections::(['id' => $this->frontsections], [
        //    'offer_title' => $this->offer_title,
        //     'offer_subtitle' => $this->offer_subtitle,
        //     'offer_image' => $filename,
        // ]);
        session()->flash('message', 
            $this->frontsections ? 'Product Updated Successfully.' : 'Product Created Successfully.');
    }

    public function storesection2()
    {
        $this->validate([
            'service_title' => 'required',
            'service_subtitle' => 'required',
            'service_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $filename = $this->image->store("/");

        FrontendSections::updateOrCreate(['id' => $this->frontsections], [
           'service_title' => $this->service_title,
            'service_subtitle' => $this->service_subtitle,
            'service_image' => $filename,
        ]);
        session()->flash('message', 
            $this->frontsections ? 'Product Updated Successfully.' : 'Product Created Successfully.');
    }

    public function storesection3()
    {
        $this->validate([
            'blog_title' => 'required',
            'blog_subtitle' => 'required',
            'blog_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        $filename = $this->image->store("/");

        FrontendSections::updateOrCreate(['id' => $this->frontsections], [
           'blog_title' => $this->blog_title,
            'blog_subtitle' => $this->blog_subtitle,
            'blog_image' => $filename,
        ]);
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
