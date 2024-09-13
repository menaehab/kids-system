@extends('kids.master')
@section('title', __('keywords.login'))
@section('content')
    <main class="main">
        <div class="container bg-light p-4 rounded d-flex justify-content-center align-items-center"
            style="min-height: 70vh;">
            <div class="form-container">
                <h1 class="text-center my-5">{{ __('keywords.login_system') }}</h1>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">{{ __('keywords.email') }}</label>
                        <input type="text" class="form-control" id="email" name="email" />
                        <x-error-alert error="email"></x-error-alert>
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">{{ __('keywords.password') }}</label>
                        <input type="password" class="form-control" id="password" name="password" />
                        <x-error-alert error="password"></x-error-alert>
                    </div>
                    <div class="mb-3 form-check">
                        <input form="remember_me" type="checkbox" class="form-check-input" id="remember_me">
                        <label id="remember_me" name="remember" class="form-check-label"
                            for="remember_me">{{ __('keywords.remember') }}</label>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-primary my-4">{{ __('keywords.login') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </main>
@endsection
