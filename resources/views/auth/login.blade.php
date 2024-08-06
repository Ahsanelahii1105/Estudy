@extends('layouts.maintwo')

@push('title')
  <title>Mind Grower Education - LogIn</title>
@endpush

@section('PageTitle')
<h3 class="display-3 font-weight-bold text-white">Login</h3>
@endsection

@section('PageText')
<p class="m-0">Login</p>
@endsection

@section('content')


<x-guest-layout>
  <x-authentication-card>
    <x-slot name="logo">
      <x-authentication-card-logo />
    </x-slot>

    <x-validation-errors class="mb-4" />

    @if (session('status'))
    <div class="mb-4 font-medium text-sm text-green-600">
      {{ session('status') }}
    </div>
  @endif

    <!-- <form method="POST" action="{{ route('login') }}">
            @csrf

            <div>
                <x-label for="email" value="{{ __('Email') }}" />
                <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            </div>

            <div class="mt-4">
                <x-label for="password" value="{{ __('Password') }}" />
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="current-password" />
            </div>

            <div class="block mt-4">
                <label for="remember_me" class="flex items-center">
                    <x-checkbox id="remember_me" name="remember" />
                    <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                </label>
            </div>

            <div class="flex items-center justify-end mt-4">
                @if (Route::has('password.request'))
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('password.request') }}">
                        {{ __('Forgot your password?') }}
                    </a>
                @endif

                <x-button class="ms-4">
                    {{ __('Log in') }}
                </x-button>
            </div>
        </form> -->

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
        <p class="lead fw-normal mb-0 me-3">Sign in with</p>
        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
          <i class="fab fa-facebook-f"></i>
        </button>

        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
          <i class="fab fa-twitter"></i>
        </button>

        <button type="button" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-floating mx-1">
          <i class="fab fa-linkedin-in"></i>
        </button>
      </div>

      <div class="divider d-flex align-items-center my-4">
        <p class="text-center fw-bold mx-3 mb-0">Or</p>
      </div>

      <!-- Email input -->
      <div data-mdb-input-init class="form-outline mb-4">
        <x-input id="email" class="form-control form-control-lg" placeholder="Enter a valid email address" type="email"
          name="email" :value="old('email')" required autofocus autocomplete="username" />
        <x-label for="email" class="form-label" value="{{ __('Email Address') }}" />
      </div>


      <!-- Password input -->
      <div data-mdb-input-init class="form-outline mb-3">
        <x-input id="password" class="form-control form-control-lg" placeholder="Enter password" type="password"
          name="password" required autocomplete="current-password" />
        <x-label for="password" class="form-label" value="{{ __('Password') }}" />
      </div>

      <div class="d-flex justify-content-between align-items-center">
        <!-- Checkbox -->
        <div class="form-check mb-0">
          <label for="remember_me" class="form-check-label">
            <x-checkbox class="form-check-input me-2" id="remember_me" name="remember" />
            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
          </label>
        </div>
        @if (Route::has('password.request'))
      <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
        href="{{ route('password.request') }}">
        {{ __('Forgot your password?') }}
      </a>
    @endif
      </div>

      <div class="text-center text-lg-start mt-4 pt-2">

        <!-- <button type="submit" data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-lg"
          style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button> -->

        <x-button class="ms-4 btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
          {{ __('Log in') }}
        </x-button>
        <p class="small fw-bold mt-2 pt-1 mb-0">Don't have an account? <a href="/register" class="link-danger">Register
            Here!</a></p>
      </div>

    </form>


  </x-authentication-card>
</x-guest-layout>





@endsection