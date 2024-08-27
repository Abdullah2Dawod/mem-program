<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>لوحة التحكم | الصفحة الرئيسية</title>

    <script src="https://kit.fontawesome.com/3d36366760.js" crossorigin="anonymous"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Arvo:wght@400;700&family=Cairo:wght@300&family=Exo+2:wght@500&family=IBM+Plex+Serif:wght@200&family=Signika+Negative&family=Source+Serif+Pro&family=Tajawal:wght@300&family=Work+Sans:wght@600&display=swap"
        rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Almarai:wght@300&family=Arvo:wght@400;700&family=Exo+2:wght@500&family=IBM+Plex+Serif:wght@200&family=Signika+Negative&family=Source+Serif+Pro&family=Work+Sans:wght@600&display=swap"
        rel="stylesheet">

    <link href="{{ asset('dash/css/style.css') }}" rel="stylesheet">

</head>

<body>
    <div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">

        <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">

            <li class="nav-item"><a class="nav-link" href="index.html">
                    <i class="fa-solid fa-gauge nav-icon"></i>الـرئـيـسـيـة<span
                        class="badge badge-sm bg-info ms-auto">جديد</span></a>
            </li>

            <li class="nav-title">الصفحات</li>

            <li class="nav-item"><a class="nav-link" href="responsible/index.html">
                    <i class="fa-solid fa-droplet nav-icon"></i>الإداريين</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="program/index.html">
                    <i class="fa-solid fa-pen nav-icon"></i>البرامج</a>
            </li>
            <li class="nav-item"><a class="nav-link" href="Subscribers/index.html">
                    <i class="fa-solid fa-pen nav-icon"></i>المشتركين</a>
            </li>

            <li class="nav-item"><a class="nav-link" href="message/index.html">
                    <i class="fa-solid fa-pen nav-icon"></i>رسائل المستخدمين</a>
            </li>

        </ul>
        <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
    </div>
    <div class="wrapper d-flex flex-column min-vh-100 bg-light">
        <header class="header header-sticky mb-4">
            <div class="container-fluid">
                <button class="header-toggler px-md-0 me-md-3" type="button"
                    onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                    <i class="fa-solid fa-bars icon icon-lg"></i>
                </button><a class="header-brand d-md-none" href="#">

                    <ul class="header-nav ms-3">
                        <li class="nav-item dropdown"><a class="nav-link py-0 icon-login-xx"
                                data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true"
                                aria-expanded="false">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32"
                                    fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                                    <path fill-rule="evenodd" d="M8 9a5 5 0 0 0-5 5v1h10v-1a5 5 0 0 0-5-5z" />
                                </svg>
                            </a>
                            <div class="dropdown-menu dropdown-menu-end pt-0">
                                <div class="dropdown-header bg-light py-2">
                                    <div class="fw-semibold">الإعدادات</div>
                                </div>
                                <a class="dropdown-item" href="#">
                                    الملف الشخصي<i class="fa-regular fa-user icon px-2"></i>
                                </a>
                                <a class="dropdown-item" href="#">
                                    تسجيل الخروج<i class="fa-solid fa-right-from-bracket icon px-2"></i>
                                </a>
                            </div>
                        </li>
                    </ul>

            </div>
            <div class="header-divider"></div>
            <div class="container-fluid">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb my-0 ms-2">
                        <li class="breadcrumb-item">
                            <!-- if breadcrumb is single--><span>عام</span>
                        </li>
                        <li class="breadcrumb-item active"><span>الـرئـيـسـيـة</span></li>
                    </ol>
                </nav>
            </div>
        </header>

        @yield('content')

        <footer class="footer">
            <div>2024</div>
            <p class="mb-0">© 2024 جميع الحقوق محفوظة</p>
        </footer>

    </div>
    <!-- CoreUI and necessary plugins-->
    <script src="{{ asset('dash/vendors/@coreui/coreui/js/coreui.bundle.min.js') }}"></script>
    <script src="{{ asset('dash/js/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.min.js"
        integrity="sha384-+sLIOodYLS7CIrQpBjl+C7nPvqq+FbNUBDunl/OZv93DB7Ln/533i8e/mZXLi/P+" crossorigin="anonymous">
    </script>

</body>

</html>
