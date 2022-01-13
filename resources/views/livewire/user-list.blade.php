<div>
    <table class="table table-bordered">
        <thead>
            <th>Name</th>
            <th>User/Email</th>
            <th>Action</th>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <td></td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
