<?php

namespace App\Livewire\Admin;

use App\Models\ProductCategory;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;


class CategoryShow extends Component
{
    use WithPagination;
    use WithFileUploads;

    protected $paginationTheme = 'bootstrap';

    public $SuperCategoryCode, $SuperCategoryName, $ParentSuperCategoryCode, $student_id, $closeModal, $category_id, $fileImport;
    public $search = '';

    public function viewCategory($category_id){
        $category = ProductCategory::find($category_id);

        if($category){
            $this->category_id = $category->id;
            $this->SuperCategoryCode = $category->SuperCategoryCode;
            $this->SuperCategoryName = $category->SuperCategoryName;
            $this->ParentSuperCategoryCode = $category->ParentSuperCategoryCode;
        }
    }
   public function saveCategory(){
       $validated = $this->validate([
           'SuperCategoryCode' => 'required|integer',
           'SuperCategoryName' => 'required|string',
           'ParentSuperCategoryCode' => 'required|integer'
       ]);

       ProductCategory::create($validated);
       session()->flash('message','Category Create Successfully');

       return redirect()->to('/admin/category');
   }

   public function editCategory($category_id){
       $category = ProductCategory::find($category_id);
       if($category){
           $this->category_id = $category->id;
           $this->SuperCategoryCode = $category->SuperCategoryCode;
           $this->SuperCategoryName = $category->SuperCategoryName;
           $this->ParentSuperCategoryCode = $category->ParentSuperCategoryCode;
       }
   }

   public function updateCategory(){
        ProductCategory::where('id',$this->category_id)->update([
           'SuperCategoryCode' => $this->SuperCategoryCode,
           'SuperCategoryName' => $this->SuperCategoryName,
           'ParentSuperCategoryCode' => $this->ParentSuperCategoryCode
        ]);

       session()->flash('message','Category Updated Successfully');
       return redirect('/admin/category');
   }
    public function deleteCategory(int $category_id){
       $this->category_id = $category_id;
    }
   public function destroyCategory(){
       ProductCategory::find($this->category_id)->delete();
       session()->flash('message','Category Deleted Successfully');
       return redirect('/admin/category');
   }

   public function importCategory(){
       $filePath = storage_path($this->importCategory);
       dd($filePath);
   }
    public function render()
    {
        $categories = ProductCategory::where('SuperCategoryName', 'like', '%'.$this->search.'%')->orderBy('SuperCategoryCode','ASC')->paginate(3);
        return view('livewire.admin.category-show',['categories' => $categories]);
    }
}
