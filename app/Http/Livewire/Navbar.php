<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use App\Models\Category;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class Navbar extends Component
{
    public $cart_amount = 0;

    // Listener for events
    protected $listeners = [
        'addToCart' => 'listener_addToCart'
    ];
    
    // To update laravel components based on listener event
    public function listener_addToCart()
    {
        if (Auth::user()) {
            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if ($order) {
                $this->cart_amount = OrderDetail::where('order_id', $order->id)->count();
            } else {
                $this->cart_amount = 0;
            }
        }
    }

    public function mount()
    {
        if (Auth::user()) {
            $order = Order::where('user_id', Auth::user()->id)->where('status', 0)->first();
            if ($order) {
                $this->cart_amount = OrderDetail::where('order_id', $order->id)->count();
            } else {
                $this->cart_amount = 0;
            }
        }
    }

    public function render()
    {
        return view('livewire.navbar', [
            'categories' => Category::all(),
            'cart_amount' => $this->cart_amount
        ]);
    }
}
