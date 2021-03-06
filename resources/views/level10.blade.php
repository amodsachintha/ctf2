@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-8 col-md-offset-2">
                <h2>Level 10</h2>

            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="/requestlevel11" method="GET">
                    <div class="form-group">
                        <label for="flag">Flag</label>
                        <input type="text" class="form-control" id="flag" name="flag" required>
                         <p class="small text-muted" style="font-family: Consolas"><br>
                            Hint : flag#
                            <br>
                            <br>
                            <a href="/out/dump.txt" class="btn btn-danger">Download</a> 
                        </p>
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