@extends('layout3')
@section('title', 'Login')
@section('content')

<form action="{{ route('employees.index') }}" method="GET">
    @csrf  
    <div class="container">
        <form class="ms-auto me-auto mt-auto" style="width: 500px">
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label" name="email">Email address</label>
                <input type="email" class="form-control" name="email" id="exampleFormControlInput1" placeholder="name@example.com">
            </div>
            <div class="mb-3">
                <label for="inputPassword5" class="form-label">Password</label>
                <input type="password" id="inputPassword5" class="form-control" aria-describedby="passwordHelpBlock">
                <div id="passwordHelpBlock" class="form-text">
                    Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
                </div>            
                <div class="pull-right">
                    <button type="submit" class="btn btn-success">Login</button>
                </div>
            </div>
        </form>
    </div>
</form>

@endsection
