{{-- <x-guest-layout>
    <div class="mb-4 text-sm text-gray-600 dark:text-gray-400">
        {{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('password.email') }}">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <x-primary-button>
                {{ __('Email Password Reset Link') }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout> --}}

@extends('layouts.auth.app')
@section('title', 'Login | SD')
@section('meta_description', 'SD Login')
@section('meta_keywords', 'SD Login')
@section('content')

    <h4 class="mb-2">Forgot Password? 🔒</h4>
    <p class="mb-4">Enter your email and we'll send password reset link that will allow you to choose a new one</p>
    <form id="formAuthentication" class="mb-3" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="text" class="form-control" id="email" name="email" placeholder="Enter your email"
                autofocus />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />

        </div>
        <button class="btn btn-primary d-grid w-100" type="submit">Send Reset Link</button>
    </form>
    <div class="text-center">
        <a href="{{ route('login') }}">
            <i class="bx bx-chevron-left scaleX-n1-rtl bx-sm"></i>
            Back to login
        </a>
    </div>
@endsection
@push('scripts')
    <script></script>
@endpush
