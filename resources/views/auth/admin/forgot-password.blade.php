@extends('layouts.guest')
@section('title', 'forgot password')
@section('styles')
    @parent
    <!-- BEGIN: Page CSS-->
    <link rel="stylesheet" type="text/css" href="{{asset('dash/app-assets/css/core/menu/menu-types/vertical-menu.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dash/app-assets/css/plugins/forms/form-validation.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('dash/app-assets/css/pages/page-auth.min.css')}}">
    <!-- END: Page CSS-->
@endsection

@section('content')
<div class="px-2 auth-wrapper auth-v1">
    <div class="py-2 auth-inner">
        <!-- Login v1 -->
        <div class="mb-0 card">
            <div class="card-body">
                <a href="javascript:void(0);" class="brand-logo">
                    <h2 class="ml-1 brand-text text-primary">Drop it</h2>
                </a>
                <x-auth-validation-errors class="mb-4" :errors="$errors" />

                <form class="mt-2 auth-login-form" action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="login-email" class="form-label">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="john@example.com" tabindex="1" autofocus />
                    </div>
                    <button class="btn btn-primary btn-block" type="submit" tabindex="4">Email Password Reset Link</button>
                </form>
                <p class="mt-2 text-center">
                    <span>Remember your password?</span>
                    <a href="{{url('/login')}}">
                        <span>Sign in now</span>
                    </a>
                </p>
            </div>
        </div>
        <!-- /Login v1 -->
    </div>
</div>
@endsection
@section('scripts')
    @parent
    <!-- BEGIN: Page JS-->
    <script src="{{asset('dash/app-assets/js/scripts/pages/page-auth-login.js')}}"></script>
    <!-- END: Page JS-->

@endsection