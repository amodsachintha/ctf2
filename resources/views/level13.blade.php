@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-8 col-md-offset-2">
                <h2>Level 13</h2>

            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="/requestlevel14" method="GET">
                    <div class="form-group">
                        <label for="flag">Flag</label>
                        <input type="text" class="form-control" id="flag" name="flag" required>
                        {{--<p class="small text-muted" style="font-family: Consolas">**format: md5sum("extracted password")</p>--}}
                    </div>
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
            </div>
        </div>
    </div>
    @if($errors->has('err'))
        <script>alert('Flag incorrect!')</script>
    @endif
@endsection