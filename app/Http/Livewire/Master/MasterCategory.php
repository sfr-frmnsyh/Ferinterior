<?php

namespace App\Http\Livewire\Master;

use App\Models\Category;
use Livewire\Component;
use Livewire\WithPagination;

class MasterCategory extends Component
{
    use WithPagination;
    public $id_category, $name;
    public $modal = false;
    public $string_form_status = " ";

    // listener livewire emit
    protected $listeners = ['destroy'];

    public function render()
    {
        $categories = Category::paginate(10);

        return view('livewire.master.master-category', [
            'categories' => $categories
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
        $this->reset(['name', 'id_category']);
    }
    public function passing_value_for_insert() 
    {
        $this->resetField();
        $this->string_form_status = "Insert";
        $this->openModal();
    }
    public function passing_value_for_edit($id)
    {
        $category = Category::find($id);
        $this->name = $category->name;
        $this->id_category = $category->id;

        $this->string_form_status = "Edit";
        $this->openModal();
    }

    public function store()
    {
        $this->validate([
            'name' => 'required'
        ]);

        Category::updateOrCreate(['id' => $this->id_category], [
            'name' => $this->name
        ]);

        $this->closeModal();
        $this->dispatchBrowserEvent('swal:success', [
            'title' => 'Success',
            'message' => 'data saved successfully',
            'icon' => 'success',
        ]);
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
        $category = Category::find($id);
        $category->delete();
    }
}
