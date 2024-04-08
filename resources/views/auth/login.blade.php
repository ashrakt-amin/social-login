@extends('layouts.app')
@section('content')

<section class="vh-100">
    <div class="container-fluid h-custom">
        <div class="row d-flex justify-content-center align-items-center h-100">
            <div class="col-md-9 col-lg-6 col-xl-5">
                <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp" class="img-fluid" alt="Sample image">
            </div>
            <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start row mt-5">
                    <div class="col-5">
                        <p class="lead fw-normal mb-0 me-3">Sign in with</p>
                    </div>

                    <div class="col-2">
                        <a href="{{route('auth.socialite.redirect','google')}}">
                            <i class="fab fa-google"></i>
                        </a>
                    </div>

                    <div class="col-2">
                        <a href="{{route('auth.socialite.redirect','facebook')}}">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </div>

                    <div class="col-2">
                        <a href="{{route('auth.socialite.redirect','github')}}">
                            <i class="fab fa-github"></i>
                        </a>
                    </div>
                </div>

                <div class="divider d-flex align-items-center my-4">
                    <p class="text-center fw-bold mx-3 mb-0">Or</p>
                </div>

                <form action="{{route('login')}}" method="POST">
                    @csrf
                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="email" id="form3Example3" class="form-control form-control-lg" placeholder="Enter a valid email address" />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-3">
                        <input type="password" name="password" id="form3Example4" class="form-control form-control-lg" placeholder="Enter password" />
                    </div>

                    <div class="d-flex justify-content-between align-items-center">
                        <!-- Checkbox -->
                        <div class="form-check mb-0">
                            <input class="form-check-input me-2" type="checkbox" value="" id="form2Example3" />
                            <label class="form-check-label" for="form2Example3">
                                Remember me
                            </label>
                        </div>
                        <a href="#!" class="text-body">Forgot password?</a>
                    </div>

                    <div class="text-center text-lg-start mt-4 pt-2">
                        <button type="submit" class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="#!" class="link-danger">Register</a></p>
                    </div>

                </form>
            </div>

        </div>
    </div>

</section>

@endsection