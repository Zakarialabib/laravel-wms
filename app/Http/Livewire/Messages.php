<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Message;
use App\Models\User;
use App\Models\Sale;
use Illuminate\Http\Request;

class Messages extends Component
{
    public $message_id, $search, $sale_id, $user_id,$status,$message;

    public function render(Request $request)
    {
        $sale = Sale::find($request->sale);

        $user = User::all();

        return view('livewire.messages', compact('user','sale'));
    }

}
