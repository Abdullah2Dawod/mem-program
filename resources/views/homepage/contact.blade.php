@extends('layouts.homepage')
@section('title', 'تواصل معنا')

@section('content')
    <!-- ================ contact section start ================= -->
    <section class="contact-section">
        <div class="container mt-6">
            <div class="row">
                <div class="col-12">
                    <h2 class="contact-title">تواصل معنا</h2>
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="col-lg-8">
                    <form class="form-contact contact_form" action="{{ route('store_contact_us') }}" method="post"
                        id="contactForm" novalidate="novalidate">
                        @csrf
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                                    <textarea class="form-control w-100 @error('description') is-invalid @enderror" id="description" name="description" cols="30"
                                        rows="9" placeholder=" نص الرسالة" required>{{ old('description') }}</textarea>
                                    @error('description')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control @error('name') is-invalid @enderror" type="text" id="name"
                                        name="name" value="{{ old('name') }}"
                                        placeholder=" الأسم كامل" required>
                                    @error('name')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input class="form-control @error('email') is-invalid @enderror" type="email" id="email"
                                        name="email" value="{{ old('email') }}"
                                        placeholder="الايميل" required>
                                    @error('email')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-group">
                                    <input class="form-control @error('subject') is-invalid @enderror" id="subject" name="subject"
                                        value="{{ old('subject') }}" placeholder="الموضوع" required>
                                    @error('subject')
                                        <div class="invalid-feedback">{{ $message }}</div>
                                    @enderror
                                </div>
                            </div>
                        </div>
                        <div class="form-group mt-3">
                            <button class="button"><i class="fa-regular fa-envelope"></i>إرسال</button>

                        </div>
                    </form>
                </div>
                <div class="col-lg-3 offset-lg-1">
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-home"></i></span>
                        <div class="media-body">
                            <h3>الكويت</h3>
                            <p>شارع القدس, CA 91770</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-tablet"></i></span>
                        <div class="media-body">
                            <h3>+1 253 565 2365</h3>
                            <p>للتواصل</p>
                        </div>
                    </div>
                    <div class="media contact-info">
                        <span class="contact-info__icon"><i class="ti-email"></i></span>
                        <div class="media-body">
                            <h3>support@colorlib.com</h3>
                            <p>تواصل معنا عبر البريد الإلكتروني!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ================ contact section end ================= -->

@endsection
