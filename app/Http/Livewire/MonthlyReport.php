<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\OrderDetail;
use Livewire\Component;

class MonthlyReport extends Component
{
    public $search_month_s, $search_month_e, $search_year;
    // listener search
    protected $updatedQueryString = ['search'];

    // Untuk menemukan pencarian item pada seluruh pagination (terlepas dari pagination saat ini)
    public function updatingSearch()
    {
        $this->resetPage();
    }
    public function resetField()
    {
        $this->reset(['search_month_s', 'search_month_e', 'search_year']);
    }

    public function render()
    {
        $dateS = new Carbon('first day of '.$this->search_month_s.' '.$this->search_year);
        $dateE = new Carbon('first day of '.$this->search_month_e.' '.$this->search_year);
        if ($this->search_month_s and $this->search_month_e and $this->search_year) {
            $order_detail = OrderDetail::join('orders', 'orders.id', '=', 'order_details.id_order')->where('orders.status', '!=', '1')->whereBetween('order_details.created_at', [$dateS->format('Y-m-d')." 00:00:00", $dateE->format('Y-m-d')." 23:59:59"])->paginate(4);
        } else {
            $order_detail = OrderDetail::join('orders', 'orders.id', '=', 'order_details.id_order')->where('orders.status', '!=', '1')->paginate(4);
        }

        return view('livewire.monthly-report', [
            'order_details' => $order_detail
        ])->layout('layouts.app');
    }
}
