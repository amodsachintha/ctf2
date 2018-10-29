@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-md-8 col-md-offset-2">
                <h2>Level 12</h2>

            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <p>A struggling high school chemistry teacher, Walter White, is diagnosed with inoperable, advanced lung cancer. On a ride-along with his DEA agent brother-in-law Hank Schrader, Walter sees a former student of his, Jesse Pinkman, fleeing the scene of a meth lab. He later contacts Jesse and devises a scheme to become partners in an attempt to combine their skills to manufacture and distribute methamphetamine, with Walter cooking the product and Jesse using his street connections to distribute it. Walter says he wants to provide financial stability for his pregnant wife, Skyler and disabled son, and to pay for his expensive cancer treatment.During Walter and Jesse's first days of selling Albuquerque's finest meth, they encounter a series of problems with local drug dealers. He continues to produce meth despite these setbacks using the alias "Heisenberg".</p>

                <p><i>Hint: Using social engineering tactics find the password (secret) for the next level</i></p>
            </div>
        </div>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <form action="/requestlevel13" method="GET">
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