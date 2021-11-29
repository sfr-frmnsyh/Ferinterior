<?php

namespace App\Http\Livewire;

use App\Models\AboutUs;
use App\Models\Order;
use Livewire\Component;

class Invoice extends Component
{
    public $id_order;

    public function mount($id_order)
    {
        $this->id_order = $id_order;
    }

    public function render()
    {
        $order = Order::find($this->id_order);
        $aboutus = AboutUs::where('index', 1)->firstOrFail();
        // dd($aboutus);

        return view('livewire.invoice', [
            'order' => $order,
            'aboutus' => $aboutus
        ])->layout('layouts.home.app');
    }
}
