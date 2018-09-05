@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
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
                    @if(session('level3') == true)
                        <a href="/requestlevel3?flag=methamphetamine" class="btn btn-default">Level 3</a>
                    @endif
                    @if(session('level4') == true)
                        <a href="/requestlevel4?flag=3b8c01e31ca528f12eabc86712b4e6f4" class="btn btn-default">Level 4</a>
                    @endif
                    @if(session('level5') == true)
                        <a href="/requestlevel5?flag=36e1a5072c78359066ed7715f5ff3da8" class="btn btn-default">Level 5</a>
                    @endif
                    @if(session('level6') == true)
                        <a href="/requestlevel6?flag=df084d2b5bb2e07e3f7e3f4a5d996582" class="btn btn-default">Level 6</a>
                    @endif
                    @if(session('level7') == true)
                        <a href="/requestlevel7?flag=add14b6fc2dd00cec7d0db61dde4f488" class="btn btn-default">Level 7</a>
                    @endif
                </div>
            </div>
        </div>
    </div>


</div>
@endsection
