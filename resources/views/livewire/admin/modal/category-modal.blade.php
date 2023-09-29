<!-- View Modal -->
<div wire:ignore.self class="modal fade" id="viewCategoryModal" tabindex="-1" aria-labelledby="viewCategoryModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="viewCategoryModalModalLabel">View Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="viewCategory">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="SuperCategoryCode">Super Category Code</label>
                        <input type="text" wire:model="SuperCategoryCode" class="form-control" id="SuperCategoryCode">
                        @error('SuperCategoryCode') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="SuperCategoryName">Super Category Name</label>
                        <input type="text" wire:model="SuperCategoryName" class="form-control" id="SuperCategoryName">
                        @error('SuperCategoryName') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ParentSuperCategoryCode">Parent Super Category Code</label>
                        <input type="text" wire:model="ParentSuperCategoryCode" class="form-control" id="ParentSuperCategoryCode">
                        @error('ParentSuperCategoryCode') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Insert Modal -->
<div wire:ignore.self class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel">Create Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="saveCategory">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="SuperCategoryCode">Super Category Code</label>
                        <input type="text" wire:model="SuperCategoryCode" class="form-control" id="SuperCategoryCode">
                        @error('SuperCategoryCode') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="SuperCategoryName">Super Category Name</label>
                        <input type="text" wire:model="SuperCategoryName" class="form-control" id="SuperCategoryName">
                        @error('SuperCategoryName') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ParentSuperCategoryCode">Parent Super Category Code</label>
                        <input type="text" wire:model="ParentSuperCategoryCode" class="form-control" id="ParentSuperCategoryCode">
                        @error('ParentSuperCategoryCode') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Save</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<div wire:ignore.self class="modal fade" id="updateCategoryModal" tabindex="-1" aria-labelledby="updateCategoryModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="updateCategoryModalLabel">Edit Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"
                        wire:click="closeModal"></button>
            </div>
            <form wire:submit.prevent="updateCategory">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="SuperCategoryCode">Super Category Code</label>
                        <input type="text" wire:model="SuperCategoryCode" class="form-control" id="SuperCategoryCode">
                        @error('SuperCategoryCode') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="SuperCategoryName">Super Category Name</label>
                        <input type="text" wire:model="SuperCategoryName" class="form-control" id="SuperCategoryName">
                        @error('SuperCategoryName') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="ParentSuperCategoryCode">Parent Super Category Code</label>
                        <input type="text" wire:model="ParentSuperCategoryCode" class="form-control" id="ParentSuperCategoryCode">
                        @error('ParentSuperCategoryCode') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Update</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Delete Category Modal -->
<div wire:ignore.self class="modal fade" id="deleteCategoryModal" tabindex="-1" aria-labelledby="deleteCategoryModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="deleteCategoryModalLabel">Delete Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                        aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="destroyCategory">
                <div class="modal-body">
                    <h4>Are you sure you want to delete this data ?</h4>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" wire:click="closeModal"
                            data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Yes! Delete</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Import Category Modal -->
<div wire:ignore.self class="modal fade" id="importCategoryModal" tabindex="-1" aria-labelledby="importCategoryModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="importCategoryModalLabel">Import Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                        aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="importCategory">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="fileImport">Select file</label>
                        <input type="file" wire:model="fileImport" class="form-control" id="fileImport">
                        @error('fileImport') <span class="text-danger">{{ $message }}</span> @enderror
                    </div>
                    <div class="mb-3">
                        <label for="fileTypeImport">File of type</label>
                        <select class="form-control" name="" id="fileTypeImport">
                            <option value="csv">CSV</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal"
                                data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Import Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Export Category Modal -->
<div wire:ignore.self class="modal fade" id="exportCategoryModal" tabindex="-1" aria-labelledby="exportCategoryModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exportCategoryModalLabel">Export Category</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" wire:click="closeModal"
                        aria-label="Close"></button>
            </div>
            <form wire:submit.prevent="exportCategory">
                <div class="modal-body">
                    <div class="mb-3">
                        <label for="fileImport">Select file</label>
                        <input type="file" wire:model="fileImport" class="form-control" id="fileImport">
                    </div>
                    <div class="mb-3">
                        <label for="fileTypeImport">File of type</label>
                        <select class="form-control" name="" id="fileTypeImport">
                            <option value="csv">CSV</option>
                        </select>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" wire:click="closeModal"
                                data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary">Export Category</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
