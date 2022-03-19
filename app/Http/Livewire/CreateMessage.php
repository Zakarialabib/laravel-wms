<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;
use App\Models\User;
use App\Models\Sale;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class CreateMessage extends Component
{
    public $message_id, $search, $sale_id, $user_id,$status,$message;

    public function render()
    {
        $messages = Message::all();
        $users = User::all();
        $sales = Sale::all();

        return view('livewire.create-message',compact('users','messages','sales'));
    }

    public function store()
    {
        $this->validate([
            'sale_id' => 'required',
            'message' => 'required',
            'user_id' => '',
            'status' => 'required',
        ]);
        Message::updateOrCreate(['id' => $this->message_id], [
            'sale_id' => $this->sale_id,
            'message' => $this->message,
            'status' => $this->status, 
            'user_id' => $this->user_id  = Auth::id(), 
        ]);
        session()->flash('message', 
        $this->message_id ? 'Messagge Updated Successfully.' : 'Messagge Created Successfully.');

       return redirect()->to('message');       
    }
}
