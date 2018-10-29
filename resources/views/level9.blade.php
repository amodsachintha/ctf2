@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-8 col-md-offset-2">
                <h2>Level 9</h2>

            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="/requestlevel10" method="GET">
                    <div class="form-group">
                        <label for="flag">Flag</label>
                        <input type="text" class="form-control" id="flag" name="flag" required>
                        <br>
                        <br>
                        <p>Smoking crack make people listen to weird music </p>
                        <br>
                        Track :<a href="/out/track.wav" >Track</a> 

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