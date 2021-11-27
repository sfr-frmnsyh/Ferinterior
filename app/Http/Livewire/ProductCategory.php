<?php

namespace App\Http\Livewire;

use App\Models\Category;
use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;

class ProductCategory extends Component
{
    use WithPagination;
    // protected $paginationTheme = 'bootstrap';
    
    public $search, $category;

    // listener
    protected $updatedQueryString = ['search'];

    // Untuk menemukan pencarian item pada seluruh pagination (terlepas dari pagination saat ini)
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function mount($categoryId)
    {
        $category = Category::find($categoryId);
        
        if ($category) {
            $this->category = $category;
        }
    }

    public function render()
    {
        if ($this->search) {
            $products = Product::where('id_category', $this->category->id)->where('name', 'like', '%'.$this->search.'%')->paginate(4);
        } else {
            $products = Product::where('id_category', $this->category->id)->paginate(4);
        }

        return view('livewire.product-index', [
            'products' => $products,
            'title' => 'All Product (' . $this->category->name . ')'
        ])->layout('layouts.home.app');
    }
}