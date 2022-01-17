<div wire:ignore.self class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">add user</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Name:</label>
                <input type="text" class="form-control" id="name" wire:model="name">
                @error('name') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Email:</label>
                <input type="email" class="form-control" id="email" wire:model="email">
                @error('email') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Password:</label>
                <input type="password" class="form-control" id="password" wire:model="password">
                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">role:</label>
                <select class="form-control" id="role_id" wire:model="role_id">
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
          <button wire:click.prevent="store()" type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  @push('scripts')
  <script type="text/javascript">
    window.livewire.on('userStore', () => {
        $('#add').modal('hide');
    });
  </script>
  @endpush