<?php

namespace App\Http\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductIndex extends Component
{
    use WithPagination;
    // protected $paginationTheme = 'bootstrap';
    
    public $search;

    // listener
    protected $updatedQueryString = ['search'];

    // Untuk menemukan pencarian item pada seluruh pagination (terlepas dari pagination saat ini)
    public function updatingSearch()
    {
        $this->resetPage();
    }
    
    public function render()
    {
        if ($this->search) {
            $products = Product::where('name', 'like', '%'.$this->search.'%')->latest()->paginate(4);
        } else {
            $products = Product::latest()->paginate(4);
        }
        
        return view('livewire.product-index', [
            'products' => $products,
            'title' => 'All Product'
        ])->layout('layouts.home.app');
    }
}
