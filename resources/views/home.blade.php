@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Level up</div>

                <div class="panel-body">
                    <a href="/requestlevel0" class="btn btn-default">Level 0</a>
                    @if(session('level1') == true)
                        <a href="/requestlevel1?flag=fc8843ac8a5adfecbc64ae28e6a343b4" class="btn btn-default">Level 1</a>
                    @endif
                    @if(session('level2') == true)
                        <a href="/requestlevel2?flag=43d3810c065f4bf3550fac648d605fcb" class="btn btn-default">Level 2</a>
                    @endif
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
