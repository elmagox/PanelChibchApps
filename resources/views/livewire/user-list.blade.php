<div class="shadow p-3 mb-5 bg-white rounded">
    <button type="button" class="btn btn-success">Agregar</button>
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
                <td><button type="button" class="btn btn-primary">Editar</button></td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>
