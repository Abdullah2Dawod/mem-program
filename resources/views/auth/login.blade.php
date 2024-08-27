@extends('layouts.homepage')
@section('title', 'الصفحة الرئيسية | برنامج ميم التعليمي')

@section('content')
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />


    <div class="login-body">
        <div class="login-container">
            <!-- قسم الشعار والاسم -->
            <div class="login-left">
                <div>
                    <img src="imag/gop.png" alt="شعار الموقع">
                    <h4>برنامج ميم التعليمي</h4>
                </div>
            </div>
            <!-- قسم تسجيل الدخول -->
            <div class="login-right">
                <div class="form-container">
                    <h2 class="mb-4">تسجيل الدخول</h2>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mb-3">
                            <x-input-label for="email" :value="__('البريد الإلكتروني')" />
                            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email"
                                :value="old('email')" required autofocus autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div class="mb-3">
                            <x-input-label for="password" :value="__('كلمة المرور')" />
                            <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                                autocomplete="current-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <x-primary-button class="ms-3">
                            {{ __('Log in') }}
                        </x-primary-button>
                    </form>
                    <p class="mt-3">ليس لديك حساب؟
                        <a href="{{ route('register') }}" target="_blank" class="register-link">إنشاء حساب</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
@endsection
