@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-success">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body" style="color: black">
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
                    @if(session('level8') == true)
                        <a href="/requestlevel8?flag=C17A5EC8BDE681AE924E009FE85B036D7D42F607" class="btn btn-default">Level 8</a>
                    @endif
                    @if(session('level9') == true)
                        <a href="/requestlevel9?flag=b1d11c77340b800466f816ccac426bd03b51ef83" class="btn btn-default">Level 9</a>
                    @endif
                    @if(session('level10') == true)
                        <a href="/requestlevel10?flag=Mild_mannered_high_school_chemistry_teacher" class="btn btn-default">Level 10</a>
                    @endif
                    @if(session('level11') == true)
                        <a href="/requestlevel11?flag=W@lter_Hartwe|l_White-Sr." class="btn btn-default">Level 11</a>
                    @endif
                    @if(session('level12') == true)
                        <a href="/requestlevel12?flag=qwertyuiop@1989" class="btn btn-default">Level 12</a>
                    @endif
                    @if(session('level13') == true)
                        <a href="/requestlevel13?flag=7ff3e75ce6aca348bc513ed3d5882946" class="btn btn-default">Level 13</a>
                    @endif
                    @if(session('level14') == true)
                        <a href="/requestlevel14?flag=934d53e0042351b3003475fd8672bd66" class="btn btn-default">Level 14</a>
                    @endif

                </div>
            </div>
        </div>
    </div>


</div>
@endsection
