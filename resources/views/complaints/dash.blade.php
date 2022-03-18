@extends("layouts.user")

@section("title")
    Toggle user Role
@endsection

@section("content")

    <div class="content">
        <div class="row">

            <div class="col-md-12">
                <div class="card card-plain">
                    <div class="card-header">
                        <h4 class="card-title"> Your Complaints</h4>
                        <p class="category"> Here are your complaints</p>
                        <div class="d-flex">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="#">Answered<span
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
                                    Ticket Category
                                </th>
                                <th>
                                    Initiator
                                </th>
                                <th>Replies</th>
                                <th>Agent</th>
                                </thead>
                                <tbody>
                                <tr>
                                    <td><span
                                            class="badge badge-secondart rounded-circle btn-success text-success">0</span>
                                    </td>
                                    <td>
                                        Dakota Rice
                                    </td>
                                    <td>
                                        Niger
                                    </td>
                                    <td>
                                        Oud XX
                                    </td>
                                    <td>
                                        $36,738
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Mr ZZZ
                                    </td>
                                </tr>
                                <tr>
                                    <td><span
                                            class="badge badge-secondart rounded-circle btn-dark text-dark">0</span>
                                    </td>
                                    <td>
                                        Minerva Hooper
                                    </td>
                                    <td>
                                        Curaçao
                                    </td>
                                    <td>
                                        Sinaai-Waas
                                    </td>
                                    <td>
                                        $23,789
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Mr ZZZ
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <span
                                            class="badge badge-secondart rounded-circle btn-success text-success">0</span>
                                    </td>
                                    <td>
                                        Sage Rodriguez
                                    </td>
                                    <td>
                                        Netherlands
                                    </td>
                                    <td>
                                        Baileux
                                    </td>
                                    <td>
                                        $56,142
                                    </td>
                                    <td>
                                        1
                                    </td>
                                    <td>
                                        Mr ZZZ
                                    </td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
            </div>
            <div class="col-md-8">
                <a class="btn btn-dark float-right text-white text-white-50" href="/complaint" data-toggle="modal"
                   data-target="#exampleModalCenter">Raise a complaint</a>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
         aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLongTitle">Create Complaint</h5>
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
                                    <form action="/p" method="POST">
                                        {{csrf_field()}}
                                        <div class="row">
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label class="col-md-5 pr-1">Subject</label>
                                                    <input type="text" name="subject" class="form-control @error('subject') is-invalid @enderror" value="">
                                                    @error('subject')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label  for="description" class="col-md-5 pr-1">Description</label>
                                                    <textarea type="text" id="description" name="description" class="form-control @error('subject') is-invalid @enderror" rows="3"></textarea>
                                                    @error('subject')
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
                                                        <option>Court Services</option>
                                                        <option>Admin Services</option>
                                                        <option>General Public</option>
                                                    </select>
                                                    @error('category')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 pr-1">
                                                <div class="form-group">
                                                    <label>Initiator</label>
                                                    <input type="text" name="initiator" class="form-control @error('initiator') is-invalid @enderror">
                                                    @error('initiator')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-md-12 pl-1">
                                                <div class="form-group">
                                                    <label>Agent</label>
                                                    <input type="text" name="agent" class="form-control @error('agent') is-invalid @enderror"
                                                           placeholder="Last Name"
                                                           value="Andrew">
                                                    @error('agent')
                                                    <span class="invalid-feedback" role="alert">
                                                        <strong>{{ $message }}</strong>
                                                    </span>
                                                    @enderror
                                                </div>
                                            </div>

                                        </div>
                                        <div class="row">
                                        </div>

                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <a href="/dash" class="btn btn-danger float-left">Cancel</a>
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
