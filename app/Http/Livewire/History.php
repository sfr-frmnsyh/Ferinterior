<?php

namespace App\Http\Livewire;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class History extends Component
{
    use WithFileUploads;
    
    public $orders = [];
    public $modal = false;
    public $id_order, $old_image_payment, $image_payment;


    public function resetField()
    {
        $this->reset(['id_order', 'image_payment', 'old_image_payment']);
    }
    public function openModal()
    {
        $this->modal = true;
    }
    public function closeModal()
    {
        $this->modal = false;
        $this->resetField();
    }
    public function passing_value_for_edit($id)
    {
        $order = Order::find($id);
        $this->id_order = $order->id;
        $this->old_image_payment = $order->image_payment;

        $this->openModal();
    }

    public function store()
    {
        $this->validate([
            'image_payment' => 'required|image|mimes:jpg,jpeg,png|max:2048'
        ]);

        // dd($this->id_order);

        if ($this->image_payment) {
            $image_upload = $this->image_payment->store('image-payment');
            Storage::delete($this->old_image_payment);
        } else {
            $image_upload = $this->old_image_payment;
        }
        

        Order::updateOrCreate(['id' => $this->id_order], [
            'image_payment' => $image_upload
        ]);

        $this->closeModal();
        $this->dispatchBrowserEvent('swal:success', [
            'title' => 'Success',
            'message' => 'image uploaded, wait admin to verify payment.',
            'icon' => 'success',
        ]);
    }

    public function render()
    {
        if (Auth::user()) {
            $this->orders = Order::where('id_user', Auth::user()->id)->where('status', '!=', 0)->latest()->get();
        }
        return view('livewire.history')->layout('layouts.home.app');
    }
}
