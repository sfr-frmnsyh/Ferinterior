<?php

namespace App\Http\Livewire;

use App\Models\Order;
use App\Models\OrderDetail;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class Cart extends Component
{
    protected $order;
    protected $orderDetail = [];

    protected $listeners = ['destroy'];

    // Sweetalert Event confirmation (delete cart item)
    public function destroy_ask($id)
    {
        // Send Event to component (Sweetalert)
        $this->dispatchBrowserEvent('swal:confirmation', [
            'title' => 'Are you sure?',
            'message' => 'You wont be able to revert this!',
            'message_after' => 'Your item has been deleted.',
            'confirm_text' => 'Yes, remove item',
            'icon' => 'warning',
            'id' => $id,
            'emit' => 'destroy',
        ]);
    }

    public function destroy($id)
    {
        // find data detail
        $orderDetail = OrderDetail::find($id);

        // check if data exist
        if (!empty($orderDetail)) {
            // if exist get main order
            $order = Order::where('id', $orderDetail->id_order)->first();
            // count detail amount
            $orderDetailAmount = OrderDetail::where('id_order', $order->id)->count();
            // if the detail is only 1, then delete data
            if ($orderDetailAmount == 1) {
                $order->delete();
            } else {
                // else only update price of main order
                $order->price_total = $order->price_total - $orderDetail->price;
                $order->update();
            }

            // delete the order detail data and emit livewire listener
            $orderDetail->delete();
            $this->emit('addToCart');
            session()->flash('message', 'Order Deleted');
        }
    }

    public function render()
    {
        if (Auth::user()) {
            $this->order = Order::where('id_user', Auth::user()->id)->where('status', 0)->first();
            if ($this->order) {
                $this->orderDetail = OrderDetail::where('id_order', $this->order->id)->get();
            }
        }

        return view('livewire.cart', [
            'order' => $this->order,
            'orderDetails' => $this->orderDetail
        ])->layout('layouts.home.app');
    }
}
