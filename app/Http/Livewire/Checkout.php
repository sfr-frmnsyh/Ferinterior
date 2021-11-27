<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\User;
use Livewire\Component;
use Illuminate\Support\Facades\Auth;

class Checkout extends Component
{
    public $price_total, $phone_number, $address;

    public function checkout()
    {
        $this->validate([
            'name' => 'required',
            'phone_number' => 'required',
            'address' => 'required'
        ]);

        // Update mobilephone and address user from shipping info form
        $user = User::where('id', Auth::user()->id)->first();
        $user->phone_number = $this->phone_number;
        $user->address = $this->address;
        $user->update();

        // update order status to 1 (checkout)
        $order = Order::where('id_user', Auth::user()->id)->where('status', 0)->first();
        $order->status = 1;
        $order->update();

        $this->emit('addToCart');
        session()->flash('message', 'Checkout Success');
        return redirect()->route('history');
    }

    public function mount()
    {
        if (!Auth::user()) {
            return redirect()->route('login');
        }

        $this->name = Auth::user()->name;
        $this->phone_number = Auth::user()->phone_number;
        $this->address = Auth::user()->address;

        $order = Order::where('id_user', Auth::user()->id)->where('status', 0)->first();
        if(!empty($order)) {
            $this->price_total = $order->price_total + $order->unique_code;
        } else {
            return redirect()->route('/');
        }
    }

    public function render()
    {
        return view('livewire.checkout')->layout('layouts.home.app');
    }
}
