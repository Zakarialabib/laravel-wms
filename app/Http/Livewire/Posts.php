<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Post;
use Livewire\WithFileUploads;

class Posts extends Component
{
    use WithFileUploads;

    public $posts, $user_id, $title, $slug ,$image, $body, $post_id, $meta_description, $meta_keyword ;
    public $isOpen = 0;  


    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()

    {
        $this->posts = Post::all();
        return view('livewire.post');
    }


   /**

     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $posts = Post::find($id);
        return view('livewire.show-posts',compact('posts'));
    }
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
        $this->title = '';
        $this->body = '';
        $this->slug = '';
        $this->meta_description = '';
        $this->meta_keyword = '';
        $this->post_id = '';
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'user_id' => '',
            'title' => 'required',
            'body' => 'required',
            'slug'=>'required|min:3|max:255', 
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'meta_description' => 'min:3|max:60',
            'meta_keyword' => 'min:3|max:170',
            'user_id' => '',
            ]);
        $filename = $this->image->store("/");
        Post::updateOrCreate(['id' => $this->post_id], [
            'user_id' => $this->user_id,
            'title' => $this->title,
            'body' => $this->body,
            'slug' => $this->slug, 
            'image' => $filename,
            'meta_description' => $this->meta_description,
            'meta_keyword' => $this->meta_keyword,
            'user_id' => $this->user_id  = Auth::id(), 
        ]);
        session()->flash('message', 
            $this->post_id ? 'Post Updated Successfully.' : 'Post Created Successfully.');
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
        $post = Post::findOrFail($id);
        $this->post_id = $id;
        $this->user_id = $post->user_id;
        $this->title = $post->title;
        $this->body = $post->body;
        $this->slug = $post->slug;
        $this->image = $post->image;
        $this->meta_description = $post->meta_description;
        $this->meta_keyword = $post->meta_keyword;
        $this->openModal();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)

    {
        Post::find($id)->delete();
        session()->flash('message', 'Post Deleted Successfully.');

    }

}