{{--<x-guest-layout>--}}
    {{--<x-auth-card>--}}
        {{--<x-slot name="logo">--}}
            {{--<a href="/">--}}
                {{--<x-application-logo class="w-20 h-20 fill-current text-gray-500" />--}}
            {{--</a>--}}
        {{--</x-slot>--}}

        {{--<!-- Validation Errors -->--}}
        {{--<x-auth-validation-errors class="mb-4" :errors="$errors" />--}}

        {{--<form >--}}


            {{--<!-- Name -->--}}
            {{--<div>--}}
                {{--<x-label for="name" :value="__('Name')" />--}}

                {{--<x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />--}}
            {{--</div>--}}

            {{--<!-- Email Address -->--}}
            {{--<div class="mt-4">--}}
                {{--<x-label for="email" :value="__('Email')" />--}}

                {{--<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />--}}
            {{--</div>--}}

            {{--<!-- Password -->--}}
            {{--<div class="mt-4">--}}
                {{--<x-label for="password" :value="__('Password')" />--}}

                {{--<x-input id="password" class="block mt-1 w-full"--}}
                                {{--type="password"--}}
                                {{--name="password"--}}
                                {{--required autocomplete="new-password" />--}}
            {{--</div>--}}

            {{--<!-- Confirm Password -->--}}
            {{--<div class="mt-4">--}}
                {{--<x-label for="password_confirmation" :value="__('Confirm Password')" />--}}

                {{--<x-input id="password_confirmation" class="block mt-1 w-full"--}}
                                {{--type="password"--}}
                                {{--name="password_confirmation" required />--}}
            {{--</div>--}}

            {{--<div class="flex items-center justify-end mt-4">--}}
                {{--<a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('login') }}">--}}
                    {{--{{ __('Already registered?') }}--}}
                {{--</a>--}}

                {{--<x-button class="ml-4">--}}
                    {{--{{ __('Register') }}--}}
                {{--</x-button>--}}
            {{--</div>--}}
        {{--</form>--}}
    {{--</x-auth-card>--}}
{{--</x-guest-layout>--}}

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>AdminLTE 3 | Registration Page</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
    <div class="register-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>

    <div class="card">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <div class="card-body register-card-body">
            <p class="login-box-msg">Register a new membership</p>

            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="input-group mb-3">
                    <input name="name" type="text" class="form-control" placeholder="Full name">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-user"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="email" type="email" class="form-control" placeholder="Email">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-envelope"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="password" type="password" class="form-control" placeholder="Password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group mb-3">
                    <input name="password_confirmation" type="password" class="form-control" placeholder="Retype password">
                    <div class="input-group-append">
                        <div class="input-group-text">
                            <span class="fas fa-lock"></span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="agreeTerms" name="terms" value="agree">
                            <label for="agreeTerms">
                                I agree to the <a href="#">terms</a>
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Register</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i>
                    Sign up using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i>
                    Sign up using Google+
                </a>
            </div>

            <a href="login" class="text-center">I already have a membership</a>
        </div>
        <!-- /.form-box -->
    </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.min.js"></script>
</body>
</html>
