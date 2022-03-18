@extends("layouts.master")

@section("title")
    USERS
@endsection

@section("content")

    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title"> JCMS users</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table">
                            <thead class=" text-primary">
                            <th>
                                NO.
                            </th>
                            <th>
                                Name
                            </th>
                            <th>
                                Email
                            </th>
                            <th>
                                Role
                            </th>
                            <th class="text-right">
                                Edit
                            </th>
                            <th class="text-right">
                                Delete
                            </th>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                                <tr>
                                    <td>
                                        {{$user->id}}
                                    </td>
                                    <td>
                                        {{$user->name}}
                                    </td>
                                    <td>
                                        {{$user->email}}
                                    </td>
                                    @if($user->usertype=='admin')
                                    <td>
                                        Admin
                                    </td>
                                    @else
                                        <td>
                                            Normal User
                                        </td>
                                    @endif
                                    <td class="text-right">
                                        <a href="/useredit/{{$user->id}}" class="btn btn-sm btn-success">Edit</a>
                                    </td>
                                    <td class="text-right">
                                        <a class="btn btn-sm btn-danger">Delete</a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section("scripts")

@endsection
