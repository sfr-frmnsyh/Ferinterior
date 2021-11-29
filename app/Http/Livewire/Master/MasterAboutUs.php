<?php

namespace App\Http\Livewire\Master;

use App\Models\AboutUs;
use Livewire\Component;

class MasterAboutUs extends Component
{
    public $name, $address, $phone_number, $link_facebook, $link_twitter, $link_instagram, $about;

    public function mount()
    {
        $about = AboutUs::where('index', '1')->first();

        if ($about) {
            $this->name = $about->name;
            $this->address = $about->address;
            $this->phone_number = $about->phone_number;
            $this->link_facebook = $about->link_facebook;
            $this->link_twitter = $about->link_twitter;
            $this->link_instagram = $about->link_instagram;
            $this->about = $about->about;
        }
    }

    public function render()
    {
        return view('livewire.master.master-about-us')->layout('layouts.app');
    }

    public function store()
    {
        $this->validate([
            'name' => 'required',
            'address' => 'required',
            'phone_number' => 'required',
            'link_facebook' => 'required',
            'link_twitter' => 'required',
            'link_instagram' => 'required',
            'about' => 'required'
        ]);

        AboutUs::updateOrCreate(['index' => '1'], [
            'name' => $this->name,
            'address' => $this->address,
            'phone_number' => $this->phone_number,
            'link_facebook' => $this->link_facebook,
            'link_twitter' => $this->link_twitter,
            'link_instagram' => $this->link_instagram,
            'about' => $this->about
        ]);

        $this->dispatchBrowserEvent('swal:success', [
            'title' => 'Success',
            'message' => 'data about saved successfully',
            'icon' => 'success',
        ]);
    }
}
