<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;

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
    
    public function render()
    {
        return view('livewire.product-detail')->layout('layouts.home.app');
    }
}
