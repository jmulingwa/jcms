@extends('layouts.user')

@section('content')
<div class="container">
    @if(session('status'))
        <div class="alert alert-danger">
            {{session('status')}}
        </div>
    @endif
{{--    <div class="row">--}}
{{--        <div class="col-md-2">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('SECRETARIATE') }}</div>--}}

{{--                <div class="card-body bg-info">--}}
{{--                   <div>--}}
{{--                       <p>OJO SECRETARIATE</p>--}}
{{--                   </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-2">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('DASHBOARD') }}</div>--}}

{{--                <div class="card-body bg-info">--}}
{{--                    <div>--}}
{{--                        <p>OJO SECRETARIATE</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-2">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('TICKETS') }}</div>--}}

{{--                <div class="card-body bg-info">--}}
{{--                    <div>--}}
{{--                        <p>OJO SECRETARIATE</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-2">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('USERS') }}</div>--}}

{{--                <div class="card-body bg-info">--}}
{{--                    <div>--}}
{{--                        <p>OJO SECRETARIATE</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-2">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('E-MAILS') }}</div>--}}

{{--                <div class="card-body bg-info">--}}
{{--                    <div>--}}
{{--                        <p>OJO SECRETARIATE</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="col-md-2">--}}
{{--            <div class="card">--}}
{{--                <div class="card-header">{{ __('STAFF') }}</div>--}}

{{--                <div class="card-body bg-info">--}}
{{--                    <div>--}}
{{--                        <p>OJO SECRETARIATE</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--    </div>--}}
    <div class="row">
        <div class="col-md-4 mt-5">
            <button class="btn btn-success">Raise a complaint</button>
        </div>
    </div>
</div>
@endsection
