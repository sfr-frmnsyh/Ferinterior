<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Models\Category;

class Home extends Component
{
    public function render()
    {
        return view('livewire.home',[
            'products' => Product::take(8)->latest()->get(),
            'categories' => Category::take(8)->latest()->get(),
        ])->layout('layouts.home.app');
    }
}
