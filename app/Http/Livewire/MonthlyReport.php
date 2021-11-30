<?php

namespace App\Http\Livewire;

use Carbon\Carbon;
use App\Models\Order;
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
            $order = Order::whereBetween('created_at', [$dateS->format('Y-m-d')." 00:00:00", $dateE->format('Y-m-d')." 23:59:59"])->latest()->paginate(4);
        } else {
            $order = Order::latest()->paginate(4);
        }

        return view('livewire.monthly-report', [
            'orders' => $order
        ])->layout('layouts.app');
    }
}
