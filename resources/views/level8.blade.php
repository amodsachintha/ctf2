@extends('layouts.app')

@section('content')
     <div class="container">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-8 col-md-offset-2">
                <h2>Level 8</h2>

            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="/requestlevel9" method="GET">
                    <div class="form-group">
                        <label for="flag">Flag</label>
                        <input type="text" class="form-control" id="flag" name="flag" required>
                        

                    </div>


                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>

                <br>
                <br>
                <div style="padding-left: 200px;">
                    <form action="/searchlevel8" method="post">
                        <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}">

                    <div class="form-inline">
                        <label for="flag">Dealer : </label>
                        <input type="text" class="form-control" id="key" name="key" required>
                        
                        <input type="submit" value="search" class="btn btn-primary">
                    </div>


                    
                </form>
                </div>
                <br>
                <table class="table table-bordered table-reponsive">
                    <th>Dealer</th>
                    <th>Drug ID</th>
                
                @if(isset($table))
                    @foreach($table as $tab)
                    <tr>
                        <td>{{$tab->name}}</td>
                        <td>{{$tab->id}}</td>

                    </tr>
                    @endforeach
                @endif
                </table>
            </div>
        </div>
    </div>
   @if($errors->has('err'))
        <script>alert('Flag incorrect!')</script>
    @endif
@endsection