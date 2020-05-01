@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mt-5 pt-5">
            <div class="card">
                <div class="card-header text-center">LOGIN</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <!-- Email -->
                            <div class="md-form">
                                <input id="materialLoginFormEmail" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>
                                <label for="materialLoginFormEmail">E-mail</label>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <!-- Password -->
                            <div class="md-form">

                                <input id="materialLoginFormPassword" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                <label for="materialLoginFormPassword">Password</label>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>

                            <div class="d-flex justify-content-around">


                                <div>
                                    <!-- Forgot password -->
                                    <a href="{{ route('password.request') }}">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Sign in button -->
                            <div class="formbutton">
                            <button class="btn btn-rounded btn-block my-4 waves-effect z-depth-0 mx-auto" style="width:40%;" type="submit">Sign in</button>
                            </div>
                            <!-- Register -->
                            <p class="text-center">Not a member?
                                <a href="{{ route('register') }}">Register</a>
                            </p>

                            <!-- Social login -->
                            <p  class="text-center">or sign in with:
                            <a type="button" href="(route('social.redirect',['provider' => 'facebook'])" class="btn-floating btn-sm  btn-fb">
                                <i class="fab fa-facebook-f"></i>
                            </a>
                            <a type="button" class="btn-floating btn-tw btn-sm">
                                <i class="fab fa-twitter"></i>
                            </a>
                            </p>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
