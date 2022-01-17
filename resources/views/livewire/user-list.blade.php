<div class="shadow p-3 mb-5 bg-white rounded">
    <button type="button" data-toggle="modal" data-target="#add" class="btn btn-success">Add</button>
    @include('livewire.add')
    @include('livewire.update')
    @include('livewire.password')
    @if (session()->has('message'))
        <div class="alert alert-success mt-3 alert-dismissible fade show" role="alert">
            {{ session('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    @if (session()->has('error'))
        <div class="alert alert-danger mt-3 alert-dismissible fade show" role="alert">
            {{ session('error') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
    <table class="table table-hover mt-3">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">User/Email</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
        @foreach($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->email}}</td>
                <td>@if($user->is_active) <span class="badge badge-success">Active</span> @else <span class="badge badge-danger">Inactive</span> @endif</td>
                <td><button data-toggle="modal" data-target="#update" wire:click="edit({{ $user->id }})" type="button" class="btn btn-primary">Update</button>
                    <button data-toggle="modal" data-target="#changePassword" wire:click="editPassword({{ $user->id }})" type="button" class="btn btn-primary">Change password</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
