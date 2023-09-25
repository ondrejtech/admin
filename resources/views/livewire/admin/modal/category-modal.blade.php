<!-- Insert Modal -->
<div wire:ignore.self class="modal fade" id="categoryModal" tabindex="-1" aria-labelledby="categoryModalLabel"
     aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="categoryModalLabel">Create Student</h5>
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
