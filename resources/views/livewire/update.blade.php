<div wire:ignore.self class="modal fade" id="update" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="update-label">update user</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" id="name-update" wire:model="name">
                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email-update" wire:model="email">
                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">status:</label>
                <select class="form-control" id="is_active-update" wire:model="is_active">
                    <option value="">Select a status</option>
                    <option value="1">Active</option>
                    <option value="0">Inactive</option>
                  </select>
                  @error('is_active') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">role:</label>
                <select class="form-control" id="role_id-update" wire:model="role_id">
                    <option value="">Select a role</option>
                    @foreach ($roles as $role)
                        <option value="{{ $role->id }}">{{ $role->name }}</option>
                    @endforeach
                  </select>
                  @error('role_id') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button wire:click.prevent="update()" type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  @push('scripts')
  <script type="text/javascript">
    window.livewire.on('userUpdate', () => {
        $('#update').modal('hide');
    });
    </script>
    @endpush