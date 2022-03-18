@extends("layouts.master")

@section("title")
    Toggle user Role
@endsection

@section("content")

    <div class="content">
        <div class="row">
            <div class="col-md-4">
                {{--                <div class="card card-user">--}}
                {{--                    <div class="image">--}}
                {{--                        <img src="../assets/img/bg5.jpg" alt="...">--}}
                {{--                    </div>--}}
                {{--                    <div class="card-body">--}}
                {{--                        <div class="author">--}}
                {{--                            <a href="#">--}}
                {{--                                <img class="avatar border-gray" src="../assets/img/mike.jpg" alt="...">--}}
                {{--                                <h5 class="title">Mike Andrew</h5>--}}
                {{--                            </a>--}}
                {{--                            <p class="description">--}}
                {{--                                michael24--}}
                {{--                            </p>--}}
                {{--                        </div>--}}
                {{--                        <p class="description text-center">--}}
                {{--                            "Lamborghini Mercy <br>--}}
                {{--                            Your chick she so thirsty <br>--}}
                {{--                            I'm in that two seat Lambo"--}}
                {{--                        </p>--}}
                {{--                    </div>--}}
                {{--                    <hr>--}}
                {{--                    <div class="button-container">--}}
                {{--                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">--}}
                {{--                            <i class="fab fa-facebook-f"></i>--}}
                {{--                        </button>--}}
                {{--                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">--}}
                {{--                            <i class="fab fa-twitter"></i>--}}
                {{--                        </button>--}}
                {{--                        <button href="#" class="btn btn-neutral btn-icon btn-round btn-lg">--}}
                {{--                            <i class="fab fa-google-plus-g"></i>--}}
                {{--                        </button>--}}
                {{--                    </div>--}}
                {{--                </div>--}}
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5 class="title">Edit Profile</h5>
                    </div>
                    <div class="card-body">
                        <form action="/user_role_update/{{$user->id}}" method="POST">
                            {{csrf_field()}}
                            {{method_field("PUT")}}
                            <div class="row">
                                {{--                                <div class="col-md-5 pr-1">--}}
                                {{--                                    <div class="form-group">--}}
                                {{--                                        <label>Company (disabled)</label>--}}
                                {{--                                        <input type="text" class="form-control" disabled="" placeholder="Company" value="Creative Code Inc.">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label class="col-md-5 pr-1">Username</label>
                                        <input type="text" name="username" class="form-control"
                                               value="{{$user->username}}" disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Email address</label>
                                        <input type="email" name="email" class="form-control" value="{{$user->email}}"
                                               disabled>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 pr-1">
                                    <div class="form-group">
                                        <label>First Name</label>
                                        <input type="text" name="name" class="form-control" value="{{$user->name}}"
                                               disabled>
                                    </div>
                                </div>
                                <div class="col-md-6 pl-1">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input type="text" class="form-control" placeholder="Last Name" value="Andrew"
                                               disabled>
                                    </div>
                                </div>
                            </div>
                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-md-12">--}}
                            {{--                                    <div class="form-group">--}}
                            {{--                                        <label>Address</label>--}}
                            {{--                                        <input type="text" class="form-control" placeholder="Home Address" value="Bld Mihail Kogalniceanu, nr. 8 Bl 1, Sc 1, Ap 09">--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                            <div class="row">
                                {{--                                <div class="col-md-4 pr-1">--}}
                                {{--                                    <div class="form-group">--}}
                                {{--                                        <label>City</label>--}}
                                {{--                                        <input type="text" class="form-control" placeholder="City" value="Mike">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                {{--                                <div class="col-md-4 px-1">--}}
                                {{--                                    <div class="form-group">--}}
                                {{--                                        <label>Country</label>--}}
                                {{--                                        <input type="text" class="form-control" placeholder="Country" value="Andrew">--}}
                                {{--                                    </div>--}}
                                {{--                                </div>--}}
                                @if($user->usertype=='admin')
                                    <div class="col-md-12 pl-1">
                                        <div class="form-group">
                                            <label>Grant Role</label>
                                            <select name="usertype" class="form-control">
                                                <option>admin</option>
                                                <option>Normal User</option>
                                            </select>
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-12 pl-1">
                                        <div class="form-group">
                                            <label>Grant Role</label>
                                            <select name="usertype" class="form-control">
                                                <option>Normal User</option>
                                                <option>admin</option>
                                            </select>
                                        </div>
                                    </div>
                                @endif
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <a href="/users" class="btn btn-danger float-left">Cancel</a>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" value="Update" class="btn btn-success float-right align-baseline" >
                                    </div>
                                </div>
                            </div>
                            {{--                            <div class="row">--}}
                            {{--                                <div class="col-md-12">--}}
                            {{--                                    <div class="form-group">--}}
                            {{--                                        <label>About Me</label>--}}
                            {{--                                        <textarea rows="4" cols="80" class="form-control" placeholder="Here can be your description" value="Mike">Lamborghini Mercy, Your chick she so thirsty, I'm in that two seat Lambo.</textarea>--}}
                            {{--                                    </div>--}}
                            {{--                                </div>--}}
                            {{--                            </div>--}}
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection


@section("scripts")

@endsection
