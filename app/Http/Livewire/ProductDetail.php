<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\Product;
use Livewire\Component;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;

class ProductDetail extends Component
{
    public $product, $qty;

    public function mount($productId)
    {
        $product = Product::find($productId);
        
        if ($product) {
            $this->product = $product;
        }
    }

    public function SwalTest()
    {
        $this->dispatchBrowserEvent('swal:test', [
            'title' => 'SUCCESS',
            'message' => 'Success add to cart',
            'icon' => 'success',
            'iconColor' => 'green'
        ]);
    }

    public function addToCart()
    {
        $this->validate([
            'qty' => 'required'
        ]);

        // Validate if user already login
        if(!Auth::user()) {
            return redirect()->route('login');
        }

        $price = $this->product->price * $this->qty;

        // MAIN ORDER
        // Check if user have order in cart (status 0)
        $order = Order::where('id_user', Auth::user()->id)->where('status', 0)->first();

        if (empty($order)) {
            // if empty = create new order cart data
            Order::create([
                'id_user' => Auth::user()->id,
                'price_total' => $price,
                'status' => 0,
                'unique_code' => mt_rand(100, 999)
            ]);

            // get the order cart data
            $order = Order::where('id_user', Auth::user()->id)->where('status', 0)->first();
            $order->order_number = 'Fr-'.$order->id;
            $order->update();

        } else {
            // if cart exist, update the price
            $order->price_total = $order->price_total + $price;
            $order->update();
        }

        // ORDER DETAIL
        OrderDetail::create([
            'id_product' => $this->product->id,
            'id_order' => $order->id,
            'qty' => $this->product->id,
            'price' => $price,
            'colour' => $this->product->colour
        ]);

        $this->emit('addToCart');
        $this->dispatchBrowserEvent('swal:success', [
            'title' => 'SUCCESS',
            'message' => 'Success add to cart',
            'icon' => 'success',
            'iconColor' => 'green'
        ]);
        return redirect()->back();
    }
    
    public function render()
    {
        return view('livewire.product-detail')->layout('layouts.home.app');
    }
}
