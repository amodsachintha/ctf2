@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-8 col-md-offset-2">
                <h2>Level 5</h2>

            </div>
        </div>
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-8 col-md-offset-2">
                <p><i>hint: well well, this browser won't get you any further!</i></p>
                <code>
                    <a href="/rest" target="_blank" class="btn btn-success">REST</a>
                </code>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="/requestlevel6" method="GET">
                    <div class="form-group">
                        <label for="flag">Flag</label>
                        <input type="text" class="form-control" id="flag" name="flag" required>
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
