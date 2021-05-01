<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\WithFileUploads;
use Livewire\Component;

class Services extends Component
{
    use WithFileUploads;

    public $services, $service_id, $status, $name, $slug ,$image, $content, $icon, $color ;

    public function render()
    {
        $this->services = Service::all();
        return view('livewire.services');
    }

     /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'name' => 'required',
            'content' => 'required',
            'slug'=>'required|min:3|max:255', 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'icon' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'color' => 'required',
            'status' => '',
            ]);
        $filename = $this->image->store("/");
        Service::updateOrCreate(['id' => $this->service_id], [
            'name' => $this->name,
            'content' => $this->content,
            'slug' => $this->slug, 
            'image' => $filename,
            'icon' => $filename,
            'color' => $this->color,
            'status' => $this->status,
        ]);
        session()->flash('message', 
            $this->service_id ? 'Post Updated Successfully.' : 'Post Created Successfully.');
        $this->closeModal();
        $this->resetInputFields();
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $service = Service::findOrFail($id);
        $this->service_id = $id;
        $this->name = $service->name;
        $this->content = $service->content;
        $this->slug = $service->slug;
        $this->image = $service->image;
        $this->icon = $service->icon;
        $this->color = $service->color;
        $this->status = $service->status;
        $this->openModal();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)

    {
        Service::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');

    }
}
