<?php

namespace App\Http\Livewire\Master;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;
use Illuminate\Support\Facades\Storage;

class MasterProduct extends Component
{
    use WithPagination;
    use WithFileUploads;

    public $search;
    // listener search
    protected $updatedQueryString = ['search'];
    // listener livewire emit
    protected $listeners = ['destroy'];

    // Untuk menemukan pencarian item pada seluruh pagination (terlepas dari pagination saat ini)
    public function updatingSearch()
    {
        $this->resetPage();
    }

    public $name, $price, $is_ready, $colour, $size, $weight, $image, $old_image, $description, $id_category, $modal=false;
    public $id_product; //id product
    public $string_form_status = "Insert";
    private $product;

    public function render()
    {
        if ($this->search) {
            $this->product = Product::where('name', 'like', '%'.$this->search.'%')->paginate(10);
        } else {
            $this->product = Product::latest()->simplePaginate(10);
        }

        return view('livewire.master.master-product', [
            'products' => $this->product
        ])->layout('layouts.app');
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

    public function resetField()
    {
        $this->reset(['name','price', 'is_ready', 'colour', 'size', 'weight', 'image', 'old_image', 'description','id_category', 'id_product']);
    }

    public function store()
    {
        $validate_img = '';

        if ($this->image) {
            $validate_img = 'image|mimes:jpg,jpeg,png|max:2048';
        }

        $this->validate([
            'name' => 'required',
            'price' => 'numeric|required',
            'is_ready' => 'required',
            'colour' => 'required',
            'size' => 'required',
            'weight' => 'required',
            'image' => $validate_img,
            'description' => 'required',
            'id_category' => 'required'
        ]);

        if ($this->image) {
            $image_upload = $this->image->store('products');
            Storage::delete($this->old_image);
        } else {
            $image_upload = $this->old_image;
        }
        

        Product::updateOrCreate(['id' => $this->id_product], [
            'name' => $this->name,
            'price' => $this->price,
            'is_ready' => $this->is_ready,
            'colour' => $this->colour,
            'size' => $this->size,
            'weight' => $this->weight,
            'image' => $image_upload,
            'description' => $this->description,
            'id_category' => $this->id_category
        ]);

        $this->closeModal();
        $this->dispatchBrowserEvent('swal:success', [
            'title' => 'Success',
            'message' => 'data saved successfully',
            'icon' => 'success',
        ]);
    }

    public function passing_value_for_edit($id)
    {
        $product = Product::find($id);
        $this->name = $product->name;
        $this->price = $product->price;
        $this->is_ready = $product->is_ready;
        $this->colour = $product->colour;
        $this->size = $product->size;
        $this->weight = $product->weight;
        $this->old_image = $product->image;
        $this->description = $product->description;
        $this->id_category = $product->id_category;
        $this->id_product = $product->id;

        $this->string_form_status = "Edit";

        $this->openModal();
    }

    public function passing_value_for_insert()
    {
        $this->string_form_status = "Insert";
        $this->openModal();
    }

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
        $product = Product::find($id);

        // check if data exist
        if (!empty($product)) {
            $product->delete();
            Storage::delete($product->image);
        }
    }
}
