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
            'products' => Product::take(8)->get()->latest(),
            'categories' => Category::take(8)->get()->latest(),
        ])->layout('layouts.home.app');
    }
}
