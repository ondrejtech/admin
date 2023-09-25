<?php

namespace App\Livewire\Admin;

use App\Models\ProductCategory;
use Livewire\Component;

class CategoryShow extends Component
{

    public $SuperCategoryCode, $SuperCategoryName, $ParentSuperCategoryCode, $student_id, $closeModal;

   public function saveCategory(){
       $validated = $this->validate([
           'SuperCategoryCode' => 'required|integer',
           'SuperCategoryName' => 'required|string',
           'ParentSuperCategoryCode' => 'required|integer'
       ]);

       ProductCategory::create($validated);
       session()->flash('message','Student Updated Successfully');
       return redirect()->to('/admin/category');
   }
    public function render()
    {
        $categories = ProductCategory::all();
        return view('livewire.admin.category-show',['categories' => $categories]);
    }
}
