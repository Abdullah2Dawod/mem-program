<!DOCTYPE html>
<html lang="ar" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="{{ asset('imag/gop.png') }}" type="image/x-icon">
    <title>@yield('title') | {{ config('app.name') }}</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Almarai&family=Cairo&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>

    <!-- نافبار -->
    <nav id="navbar" class="navbar navbar-expand-lg fixed-top  navbar-dark bg-dark">
        <div class="container">

            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">الرئيسية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#programs') }}">برامجنا</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/#moderators') }}">برعاية</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact_us') }}">تواصل معنا</a>
                    </li>
                </ul>

            </div>
            <div class="d-flex gap-2">
                <a href="{{ route('login') }}" target="_blank" rel="noopener noreferrer"
                    class="btn btn-outline-light me-2 login-zer">
                    <i class="fa-solid fa-arrow-right-to-bracket"></i> تسجيل دخول
                </a>
                <a href="{{ route('register') }}" target="_blank" rel="noopener noreferrer" class="btn btn-light sgin-zer">
                    إنشاء حساب
                </a>
            </div>
            <a class="navbar-brand" href="#">
                <img src="imag/gop.png" alt="شعار">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="تبديل التنقل">
                <span class="navbar-toggler-icon"></span>
            </button>

        </div>
    </nav>
   @yield('content')
    <footer class="footer py-3">
        <div class="container text-center">
            <p class="mb-0">© 2024 جميع الحقوق محفوظة</p>
        </div>
    </footer>
    <!-- روابط JavaScript لـ Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/main.js') }}" defer></script>
</body>
</html>
