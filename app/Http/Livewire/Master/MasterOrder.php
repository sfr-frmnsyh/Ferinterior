<?php

namespace App\Http\Livewire\Master;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class MasterOrder extends Component
{
    use WithPagination;
    // listener search
    protected $updatedQueryString = ['search_name', 'search_status'];
    
    // Untuk menemukan pencarian item pada seluruh pagination (terlepas dari pagination saat ini)
    public function updatingSearch()
    {
        $this->resetPage();
    }

    private $orders;
    public $search_order_number;



    public function render()
    {
        if ($this->search_order_number) {
            $this->orders = Order::orderBy('status', 'asc')->where('order_number', 'like', '%'.$this->search_order_number.'%')->latest()->paginate(10);
        } else {
            $this->orders = Order::orderBy('status', 'asc')->latest()->paginate(10);
        }

        return view('livewire.master.master-order', [
            'orders' => $this->orders
        ])->layout('layouts.app');
    }
}
