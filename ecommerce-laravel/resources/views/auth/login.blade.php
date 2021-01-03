{{--<x-guest-layout>--}}
    {{--<x-auth-card>--}}
        {{--<x-slot name="logo">--}}
            {{--<a href="/">--}}
                {{--<x-application-logo class="w-20 h-20 fill-current text-gray-500"/>--}}
            {{--</a>--}}
        {{--</x-slot>--}}

        {{--<!-- Session Status -->--}}
        {{--<x-auth-session-status class="mb-4" :status="session('status')"/>--}}

        {{--<!-- Validation Errors -->--}}
        {{--<x-auth-validation-errors class="mb-4" :errors="$errors"/>--}}

        {{--<form >--}}


        {{--<!-- Email Address -->--}}
            {{--<div>--}}
                {{--<x-label for="email" :value="__('Email')"/>--}}

                {{--<x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required--}}
                         {{--autofocus/>--}}
            {{--</div>--}}

            {{--<!-- Password -->--}}
            {{--<div class="mt-4">--}}
                {{--<x-label for="password" :value="__('Password')"/>--}}

                {{--<x-input id="password" class="block mt-1 w-full"--}}
                         {{--type="password"--}}
                         {{--name="password"--}}
                         {{--required autocomplete="current-password"/>--}}
            {{--</div>--}}

            {{--<!-- Remember Me -->--}}
            {{--<div class="block mt-4">--}}
                {{--<label for="remember_me" class="inline-flex items-center">--}}
                    {{--<input id="remember_me" type="checkbox"--}}
                           {{--class="rounded border-gray-300 text-indigo-600 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"--}}
                           {{--name="remember">--}}
                    {{--<span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>--}}
                {{--</label>--}}
            {{--</div>--}}

            {{--<div class="flex items-center justify-end mt-4">--}}
                {{--@if (Route::has('password.request'))--}}
                    {{--<a class="underline text-sm text-gray-600 hover:text-gray-900"--}}
                       {{--href="{{ route('password.request') }}">--}}
                        {{--{{ __('Forgot your password?') }}--}}
                    {{--</a>--}}
                {{--@endif--}}

                {{--<x-button class="ml-3">--}}
                    {{--{{ __('Login') }}--}}
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
    <title>AdminLTE 3 | Log in</title>

    <!-- Google Font: Source Sans Pro -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="/admin/plugins/fontawesome-free/css/all.min.css">
    <!-- icheck bootstrap -->
    <link rel="stylesheet" href="/admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="/admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
    <div class="login-logo">
        <a href="../../index2.html"><b>Admin</b>LTE</a>
    </div>
    <!-- /.login-logo -->
    <div class="card">
        <div class="card-body login-card-body">
            <p class="login-box-msg">Sign in to start your session</p>

            <form method="POST" action="{{ route('login') }}">
                @csrf
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
                <div class="row">
                    <div class="col-8">
                        <div class="icheck-primary">
                            <input type="checkbox" id="remember">
                            <label for="remember">
                                Remember Me
                            </label>
                        </div>
                    </div>
                    <!-- /.col -->
                    <div class="col-4">
                        <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <div class="social-auth-links text-center mb-3">
                <p>- OR -</p>
                <a href="#" class="btn btn-block btn-primary">
                    <i class="fab fa-facebook mr-2"></i> Sign in using Facebook
                </a>
                <a href="#" class="btn btn-block btn-danger">
                    <i class="fab fa-google-plus mr-2"></i> Sign in using Google+
                </a>
            </div>
            <!-- /.social-auth-links -->

            <p class="mb-1">
                <a href="forgot-password.html">I forgot my password</a>
            </p>
            <p class="mb-0">
                <a href="register" class="text-center">Register a new membership</a>
            </p>
        </div>
        <!-- /.login-card-body -->
    </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="/admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="/admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="/admin/dist/js/adminlte.min.js"></script>
</body>
</html>
