@extends('master')

@section('content')
<div class="signup-form row justify-content-center ">
    <form action="#" class="col-md-4" method="POST">
        <h2>Login</h2>
        @csrf
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" required="required">
        </div>
        <div class="form-group">
            <input type="password" class="form-control" name="password" placeholder="Password" required="required">
        </div>

        <div class="form-group">
            <label class="form-check-label"><input type="checkbox" required="required">Remember Me</label>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-success btn-lg btn-block">Login</button>
        </div>
        <div class="text-center row">Already have an account? <a href="#">Sign in</a></div>
    </form>
</div>


@stop
