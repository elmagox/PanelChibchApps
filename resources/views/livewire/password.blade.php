<div wire:ignore.self class="modal fade" id="changePassword" tabindex="-1" role="dialog" aria-labelledby="add" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="changePasswordLabel">Change password</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <form>
            <div class="form-group">
                <label for="recipient-name" class="col-form-label">Password:</label>
                <input type="password" class="form-control" id="password" wire:model="password">
                @error('password') <span class="text-danger error">{{ $message }}</span>@enderror
            </div>
          </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button wire:click.prevent="changePassword()" type="button" class="btn btn-primary">Save</button>
        </div>
      </div>
    </div>
  </div>
  @push('scripts')
  <script type="text/javascript">
    window.livewire.on('userChagePassword', () => {
        $('#changePassword').modal('hide');
    });
  </script>
  @endpush