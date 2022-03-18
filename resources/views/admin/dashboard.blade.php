@extends("layouts.master")

@section("title")
jcms admin
@endsection

@section("content")

    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header">
                        <h4 class="card-title"> All Complaints</h4>
                        <p class="category"> Here are all complaints</p>
                        <div class="d-flex">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Assigned<span
                                                class="badge badge-secondart rounded-circle btn-success"> 4 </span></a><br>
                                    </li>
                                    <li class="breadcrumb-item"><a href="#">Pending<span
                                                class="badge badge-secondart rounded-circle  btn-dark"> 10 </span></a><br>
                                    </li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table">
                                <thead class=" text-primary">
                                <th>Status</th>
                                <th>
                                    Ticket Id
                                </th>
                                <th>
                                    Subject
                                </th>
                                <th>
                                    Category
                                </th>
                                <th>
                                    Initiator
                                </th>
                                <th>Replies</th>
                                <th>Assign</th>

                                </thead>
                                <tbody>
                                @foreach($complaint as $complaint)
                                <tr>
                                    <td>
                                        <span class="badge badge-secondart rounded-circle btn-success text-success">0</span>
                                    </td>
                                    <td>
                                        {{$complaint->ticketId}}
                                    </td>
                                    <td>
                                        {{$complaint->subject}}
                                    </td>
                                    <td>
                                        {{$complaint->category}}
                                    </td>
                                    <td>
                                        {{$complaint->initiator}}
                                    </td>
                                    <td>
                                        {{$complaint->replies}}
                                    </td>
                                    <td>
                                        <a href="" class="btn btn-sm btn-success"
                                           href="/complaint" data-toggle="modal"
                                           data-target="#exampleModalCenter">Assign To</a>

                                    </td>
                                </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
{{--            <div class="col-md-8">--}}
{{--                <a class="btn btn-dark float-right text-white text-white-50" href="/complaint" data-toggle="modal"--}}
{{--                   data-target="#exampleModalCenter">Raise a complaint</a>--}}
{{--            </div>--}}
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Assign To</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <form action="/p/assign" method="POST">
                                        {{csrf_field()}}

                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select name="category" class="form-control @error('subject') is-invalid @enderror ">

                                                        @foreach($users as $user)
                                                        <option>{{$user->username}}</option>
                                                        @endforeach
                                                    </select>
                                                    @error('category')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        <div class="col-md-12 pr-1">
                                            <div class="form-group">
                                                <label>Category</label>
                                                <select name="category" class="form-control @error('subject') is-invalid @enderror ">

                                                    @foreach($shida as $comp)
                                                        <option>{{$comp->subject}}</option>
                                                    @endforeach
                                                </select>
                                                @error('category')
                                                <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                @enderror
                                            </div>
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <a href="/dashboard" class="btn btn-danger float-left">Cancel</a>
                                                </div>
                                                <div class="form-group">
                                                    <input type="submit" value="Submit"
                                                           class="btn btn-success float-right align-baseline">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>


@endsection


@section("scripts")

@endsection
