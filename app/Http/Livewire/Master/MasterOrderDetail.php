<?php

namespace App\Http\Livewire\Master;

use App\Models\Order;
use App\Models\OrderDetail;
use Livewire\Component;

class MasterOrderDetail extends Component
{
    // Listener for livewire emit
    protected $listeners = ['store'];

    public $order;
    public $status;

    public function mount($id_order)
    {
        $order = Order::find($id_order);
        if ($order) {
            $this->order = $order;
            $this->status = $order->status;
        }
    }

    public function render()
    {
        $order_detail = OrderDetail::where('id_order', $this->order->id)->get();

        return view('livewire.master.master-order-detail', [
            'orderDetails' => $order_detail
        ]);
    }

    public function store_ask($id, $status)
    {
        $msg = '';
        if ($status == 1) {
            $msg = 'menunggu pembayaran';
        } elseif ($status == 2) {
            $msg = 'pesanan diproses';
        } elseif ($status == 3) {
            $msg = 'pesanan dikirim';
        } elseif ($status == 4) {
            $msg = 'pesanan telah selesai';
        } else {
            $msg = 'error';
        }
        // Send Event to component (Sweetalert)
        $this->dispatchBrowserEvent('swal:confirmation', [
            'title' => 'Are you sure?',
            'message' => 'Change status to '.$msg,
            'message_after' => 'Status changed',
            'confirm_text' => 'Yes, change status',
            'icon' => 'info',
            'id' => $id,
            'emit' => 'store',
        ]);
    }
    public function store($value)
    {
        $order = Order::find($value);
        $order->status = $this->status;
        $order->save();
    }
}
