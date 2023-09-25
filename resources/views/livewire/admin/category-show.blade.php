<div>

    @include('livewire.admin.modal.category-modal')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <h5 class="alert alert-success">{{ session('message') }}</h5>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Category managment
                            <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="Search..." style="width: 230px" />
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#categoryModal">
                                Add New Category
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-borderd table-striped">
                            <thead>
                            <tr>
                                <th>Super Category Code</th>
                                <th>Super Category Name</th>
                                <th>Parent Super Category Code</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td>{{ $category->SuperCategoryCode }}</td>
                                    <td>{{ $category->SuperCategoryName }}</td>
                                    <td>{{ $category->ParentSuperCategoryCode }}</td>
                                    <td>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#updatecategoryModal" wire:click="editCategory({{$category->id}})" class="btn btn-primary">
                                            Edit
                                        </button>
                                        <button type="button" data-bs-toggle="modal" data-bs-target="#deletecategoryModal" wire:click="deleteCategory({{$category->id}})" class="btn btn-danger">Delete</button>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="5">No Record Found</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <div>
{{--                            {{ $categories->links() }}--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
