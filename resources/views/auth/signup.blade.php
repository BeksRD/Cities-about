@extends('assets.layout')
@section('title')
    Registration
@endsection

@section('content')
    <section class="vh-100 bg-image"
             style="background-image: url('https://mdbcdn.b-cdn.net/img/Photos/new-templates/search-box/img4.webp');">
        <div class="mask d-flex align-items-center h-100 gradient-custom-3">
            <div class="container h-100">
                <div class="row d-flex justify-content-center align-items-center h-100">
                    <div class="col-12 col-md-9 col-lg-7 col-xl-6">
                        <div class="card" style="border-radius: 15px;">
                            <div class="card-body p-5">
                                <h2 class="text-uppercase text-center mb-5">Create an account</h2>

                                <form method="POST" action="/register" enctype="multipart/form-data" id="form1">
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
                                        <input type="text" name="name" id="name" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Your Full Name</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" name="username" id="username" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">Username</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="file" name="image" placeholder="Choose image" id="image" class="form-control form-control-lg"/>
                                        <label class="form-label" for="form3Example1cg">Your avatar</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="text" name="about" id="about" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example1cg">About yourself</label>
                                    </div>
                                    <div class="form-outline mb-4">
                                        <input type="email" name="email" id="email" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example3cg">Your Email</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password" id="password" class="form-control form-control-lg" />
                                        <i class="fa fa-eye" id="togglePassword"></i>
                                        <label class="form-label" for="form3Example4cg">Password</label>
                                    </div>

                                    <div class="form-outline mb-4">
                                        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control form-control-lg" />
                                        <label class="form-label" for="form3Example4cdg">Repeat your password</label>
                                    </div>


                                    <div class="d-flex justify-content-center">
                                        <button type="submit" form="form1" value="Submit" class="btn btn-success btn-block btn-lg gradient-custom-4 text-body">Register</button>
                                    </div>

                                    <p class="text-center text-muted mt-5 mb-0">Have already an account? <a href="/login" class="fw-bold text-body"><u>Login here</u></a></p>

                                </form>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script src="js/password.js"></script>
    </section>
@endsection
