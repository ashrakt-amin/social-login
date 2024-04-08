@extends('layouts.app')
@section('content')

<div class="col-md-9" style="margin-top:10%">

    <div class="justify-content-center">

        <div class="card card-md">
            <div class="card-body">
                <!-- <h2 class="h2 text-center mb-4">Login to your account</h2> -->
                <form action="{{route('register')}}" method="POST" autocomplete="off" novalidate>
                    @csrf

                    <div class="mb-3">
                        <label class="form-label">Name</label>
                        <input type="name" class="form-control" name="name" placeholder="name" autocomplete="off">
                        @if($errors->has('name'))
                        <div class="error">{{ $errors->first('name') }}</div>
                        @endif
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="your@email.com" autocomplete="off">
                        @if($errors->has('email'))
                        <div class="error">{{ $errors->first('email') }}</div>
                        @endif
                    </div>

                    <div class="mb-2">
                        <label class="form-label">
                            Password
                        </label>
                        <div class="input-group">
                            <input type="password" class="form-control" name="password" placeholder="Your password" autocomplete="off">
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip" onclick="togglePasswordVisibility(event)">
                                    <!-- Download SVG icon from http://tabler-icons.io/i/eye -->
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </a>
                            </span>

                        </div>
                    
                        @if($errors->has('password'))
                        <div class="error">{{ $errors->first('password') }}</div>
                        @endif

                    </div>

                    <div class="form-footer text-center mt-5">
                        <button type="submit" class="btn btn-primary">Sign in</button>
                    </div>
                </form>
            </div>

        </div>

    </div>
</div>


@endsection