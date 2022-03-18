@extends("layouts.user")

@section("title")
    Toggle user Role
@endsection

@section("content")

    <div class="content">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-2"></div>
            <div class="col-md-8">
                <div class="card card-plain">
                    <div class="card-header">
                        <h4 class="card-title"> Create Complaint</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="card">
                                <div class="card-header">
                                </div>
                                <div class="card-body">
                                    <form action="/" method="POST">
                                        {{csrf_field()}}
                                        {{--                            {{method_field("PUT")}}--}}
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label class="col-md-5 pr-1">Subject</label>
                                                    <input type="text" name="subject" class="form-control" value="">
                                                </div>
                                            </div>
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select name="category" class="form-control">
                                                        <option>Court Services</option>
                                                        <option>Admin Services</option>
                                                        <option>General Public</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6 pr-1">
                                                <div class="form-group">
                                                    <label>Initiator</label>
                                                    <input type="text" name="name" class="form-control" value=""
                                                    >
                                                </div>
                                            </div>
                                            <div class="col-md-6 pl-1">
                                                <div class="form-group">
                                                    <label>Agent</label>
                                                    <input type="text" class="form-control" placeholder="Last Name"
                                                           value="Andrew"
                                                    >
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
        <div class="col-md-8">
        </div>
    </div>


@endsection


@section("scripts")

@endsection
