<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class History extends Component
{
    public $orders = [];

    public function render()
    {
        if (Auth::user()) {
            $this->orders = Order::where('id_user', Auth::user()->id)->where('status', '!=', 0)->get();
        }
        return view('livewire.history')->layout('layouts.home.app');
    }
}
