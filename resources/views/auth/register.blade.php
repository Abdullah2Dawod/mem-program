@extends('layouts.homepage')
@section('title', 'الصفحة الرئيسية | إنشاء حساب جديد')

@section('content')
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Register') }}
            </x-primary-button>
        </div>
    </form>

    <div class="login-body mt-5">

        <div class="login-container d-flex align-items-center justify-content-center" style=" padding: 40px;">
            <div class="form-container w-100">
                <h2 class="mb-4 text-center">إنشاء حساب</h2>
                <form>
                    <div class="mb-3 d-flex gap-3">
                        <div class="flex-fill">
                            <label for="father-name" class="form-label">اسم ولي أمر الطالب</label>
                            <input type="text" class="form-control" id="father-name" required>
                        </div>

                        <div class="flex-fill">
                            <label for="email" class="form-label">البريد الإلكتروني</label>
                            <input type="email" class="form-control" id="email" required>
                        </div>
                    </div>
                    <div id="studentFields">
                        <div class="mb-3 d-flex gap-3">
                            <div class="flex-fill">
                                <label for="student-name-1" class="form-label">اسم الطالب</label>
                                <input type="text" class="form-control" id="student-name-1" name="studentName[]"
                                    required>
                            </div>
                            <div class="flex-fill">
                                <label class="form-label" for="specificSizeSelect-1">المرحلة الدراسية</label>
                                <select class="form-select" id="specificSizeSelect-1" name="studentGrade[]">
                                    <option selected>إختر</option>
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mb-3" style="margin-top: -8px;">
                        <i class="fa-solid fa-plus" id="addStudentBtn" style="cursor: pointer;"></i>
                    </div>

                    <div class="mb-3 d-flex gap-3">
                        <div class="flex-fill">
                            <label for="password" class="form-label">كلمة المرور</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                        <div class="flex-fill">
                            <label for="password" class="form-label">تأكيد كلمة المرور</label>
                            <input type="password" class="form-control" id="password" required>
                        </div>
                    </div>

                    <div class="mb-3 d-flex gap-3">
                        <div class="flex-fill">
                            <label for="phone" class="form-label">رقم الهاتف</label>
                            <input type="tel" class="form-control" id="phone" required>
                        </div>
                        <div class="flex-fill">
                            <label for="emergency-phone" class="form-label">رقم الطوارئ</label>
                            <input type="text" class="form-control" id="emergency-phone" required>
                        </div>
                    </div>
                    <button class="button" type="submit"><i class="fa-solid fa-user-plus"></i><a href="" target="_blank"
                            rel="noopener noreferrer" style="text-decoration: none;color: white">اشتراك</a></button>
                </form>
            </div>
        </div>
    </div>
    @endsection
