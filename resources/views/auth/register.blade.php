@extends('layouts.maintwo')

@push('title')
    <title>Mind Grower Education - SignUp</title>
@endpush

@section('PageTitle')
<h3 class="display-3 font-weight-bold text-white">Registration</h3>
@endsection

@section('PageText')
<p class="m-0">Register</p>
@endsection

@section('content')

<x-guest-layout>
    <x-authentication-card-two>
        <x-slot name="logo">
            <x-authentication-card-logo />
        </x-slot>

        <x-validation-errors class="mb-4" />

       
        <form class="mx-1 mx-md-4" method="POST" action="{{ route('register') }}">

            @csrf
            <div class="d-flex flex-row align-items-center mb-0">
                <i class="fas fa-user fa-lg ms-3 fa-fw"></i>
                <div data-mdb-input-init class="form-outline flex-fill mt-4">
                    <x-input id="name" class="form-control" type="text" name="name" :value="old('name')" required
                        autofocus autocomplete="name" />
                    <x-label for="name" class="form-label" value="{{ __('Name') }}" />
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-0">
                <i class="fas fa-envelope fa-lg ms-3 fa-fw"></i>
                <div data-mdb-input-init class="form-outline flex-fill mt-4">
                    <x-input id="email" class="form-control" type="email" name="email" :value="old('email')" required
                        autocomplete="username" />
                    <x-label for="email" class="form-label" value="{{ __('Your Email') }}" />
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-0">
                <i class="fas fa-user fa-lg ms-3 fa-fw"></i>
                <div data-mdb-input-init class="form-outline flex-fill mt-4">
                    <x-input id="age" class="form-control" type="bigint" name="age" :value="old('age')" required
                        autocomplete="userage" />
                    <x-label for="age" class="form-label" value="{{ __('Age') }}" />
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-0">
                <i class="fas fa-lock fa-lg ms-3 fa-fw"></i>
                <div data-mdb-input-init class="form-outline flex-fill mt-4">
                    <x-input id="password" class="form-control" type="password" name="password" required
                        autocomplete="new-password" />
                    <x-label for="password" class="form-label" value="{{ __('Password') }}" />
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-0">
                <i class="fas fa-lock fa-lg ms-3 fa-fw"></i>
                <div data-mdb-input-init class="form-outline flex-fill mt-4">
                    <x-input id="password_confirmation" class="form-control" type="password"
                        name="password_confirmation" required autocomplete="new-password" />
                    <x-label for="password_confirmation" class="form-label" value="{{ __('Confirm Password') }}" />
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-0">
                <i class="fas fa-lock fa-lg ms-3 fa-fw"></i>
                <div data-mdb-input-init class="form-outline flex-fill mt-4">
                    <x-input id="Phone_Number" class="form-control" type="text" name="phone" required
                        autocomplete="usernumber" />
                    <x-label for="Phone_Number" class="form-label" value="{{ __('Phone Number') }}" />
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-0">
                <i class="fas fa-lock fa-lg ms-3 fa-fw"></i>
                <div data-mdb-input-init class="form-outline flex-fill mt-4">
                    <x-input id="Current_address" class="form-control" type="text" name="address" required
                        autocomplete="useraddress" />
                    <x-label for="Current_address" class="form-label" value="{{ __('Current Address') }}" />
                </div>
            </div>

            <div class="d-flex flex-row align-items-center mb-0">
                <i class="fas fa-lock fa-lg ms-3 fa-fw"></i>
                <div data-mdb-input-init class="form-outline flex-fill mt-4">
                    <select name="gender" id="" class="form-control">
                        <option value="" selected disabled>Select an option..</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <label class="form-label">Gender</label>
                </div>
            </div>

            <!-- @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ms-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif -->

            <div class="form-check mb-5 mx-3">
                <input class="form-check-input me-2" type="checkbox" value="" />
                <label class="form-check-label" for="form2Example3">
                    I agree all statements in <a href="#">terms and condition</a>
                </label>
            </div>

            <div class="text-center text-lg-start mt-2 pt-2">

                <x-button class="btn btn-primary btn-lg" style="padding-left: 2.5rem; padding-right: 2.5rem;">
                    {{ __('Register') }}
                </x-button>

                <p class="small fw-bold mt-2 pt-1 mb-0">Do you have an account?
                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        href="{{ route('login') }}">
                        {{ __('Login Here!') }}
                    </a>
                </p>
            </div>

        </form>



    </x-authentication-card-two>
</x-guest-layout>

@endsection