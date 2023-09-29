<div>

    @include('livewire.admin.modal.category-modal')

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (session()->has('message'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{session('message')}}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card">
                    <div class="card-header">
                        <h4>Category Management
{{--                            <input type="search" wire:model="search" class="form-control float-end mx-2" placeholder="Search..." style="width: 230px" />--}}
                            <button style="margin-left: 1%" type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#categoryModal">
                                Add New Category
                            </button>
                            <button style="margin-left: 1%" type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#importCategoryModal">
                                Import Category
                            </button>
                            <button type="button" class="btn btn-primary float-end" data-bs-toggle="modal" data-bs-target="#exportCategoryModal">
                                Export Category
                            </button>
                        </h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered border-primary">
                            <thead>
                            <tr>
                                <th class="text-center">Super Category Code</th>
                                <th class="text-center">Super Category Name</th>
                                <th class="text-center">Parent Super Category Code</th>
                                <th class="text-center">Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @forelse ($categories as $category)
                                <tr>
                                    <td>{{ $category->SuperCategoryCode }}</td>
                                    <td class="text-center">{{ $category->SuperCategoryName }}</td>
                                    <td>{{ $category->ParentSuperCategoryCode }}</td>
                                    <td>
                                        <div class="btn-group d-flex">
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#viewCategoryModal" wire:click="viewCategory({{$category->id}})" class="btn btn-success">View</button>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#updateCategoryModal" wire:click="editCategory({{$category->id}})" class="btn btn-primary">
                                                Edit
                                            </button>
                                            <button type="button" data-bs-toggle="modal" data-bs-target="#deleteCategoryModal" wire:click="deleteCategory({{$category->id}})" class="btn btn-danger">Delete</button>
                                        </div>
                                    </td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="5">No Record Found</td>
                                </tr>
                            @endforelse
                            </tbody>
                        </table>
                        <div>
                            {{ $categories->links() }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
