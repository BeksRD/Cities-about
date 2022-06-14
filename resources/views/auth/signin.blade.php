@extends('assets.layout')
@section('title')
    Sign in
@endsection

@section('content')
    @include('assets.header')
    <div class="container">
        <form method="POST" action="/login" class="login-form col-md-6" id="form1" >
            <!-- Email input -->
            @csrf
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="form-outline mb-4">
                <input type="email" name="email" id="email" class="form-control" />
                <label class="form-label" for="form2Example1">Email address</label>
            </div>

            <!-- Password input -->
            <div class="form-outline mb-4">
                <input type="password" name="password" id="password" class="form-control" />
                <label class="form-label" for="form2Example2">Password</label>
            </div>

            <!-- 2 column grid layout for inline styling -->
            <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                        <input class="form-check-input" name="remember" type="checkbox" value="1" id="remember" checked />
                        <label class="form-check-label" for="remember"> Remember me </label>
                    </div>
                </div>

                <div class="col">
                    <!-- Simple link -->
                    <a href="/forget-password">Forgot password?</a>
                </div>
            </div>

            <!-- Submit button -->
            <button type="submit" form="form1" value="Submit" class="btn btn-primary btn-block mb-4">Sign in</button>
            <!-- Register buttons -->
            <div class="text-center">
                <p>Not a member? <a href="/register">Register</a></p>
                <p>or sign up with:</p>
                <button type="button" class="btn btn-link btn-floating mx-1">
                    <i class="fa fa-google" aria-hidden="true"></i>
                </button>
            </div>
        </form>
    </div>
    @include('assets.footer')
@endsection


