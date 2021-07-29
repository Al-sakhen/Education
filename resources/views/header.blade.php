
<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset("innerpage_style.css")}}">
    <link rel="stylesheet" href="{{asset('subject_details.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.rtl.min.css" integrity="sha384-LPvXVVAlyPoBSGkX8UddpctDks+1P4HG8MhT7/YwqHtJ40bstjzCqjj+VVVDhsCo" crossorigin="anonymous">
<title>Clever Team</title>
<meta content="" name="description">
<meta content="" name="keywords">

<!-- Favicons -->
<link href="{{asset('assets/img/favicon.png')}}" rel="icon">
<link href="{{asset('assets/img/apple-touch-icon.png')}}" rel="apple-touch-icon">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" referrerpolicy="no-referrer" />

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

<!-- Vendor CSS Files -->
<link href="{{asset('assets/vendor/aos/aos.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
<link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

<!-- Template Main CSS File -->
<link href="{{asset('assets/css/style.css')}}" rel="stylesheet">


<!-- ======================================================== -->

</head>

<body>

<!-- ======= Header ======= -->
<header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center justify-content-between">

    <h1 class="logo"><a href="index.html">كليفير تيم<span>.</span></a></h1>

    <!-- Uncomment below if you prefer to use an image logo -->
    <!-- <a href="index.html" class="logo"><img src="assets/img/logo.png" alt=""></a>-->

    <nav id="navbar" class="navbar">
        <ul>
        <li><a class="nav-link scrollto active" href="{{url('index')}}">الرئيسية</a></li>
        <li><a class="nav-link scrollto" href="#about">من نحن؟</a></li>
        <li><a class="nav-link scrollto" href=" {{url('index/#services')}}">الخدمات</a></li>
        <li><a class="nav-link scrollto" href="#team">الفريق</a></li>

        <li><a class="nav-link scrollto" href="{{url('index/#contact')}}">تواصل معنا</a></li>
            <li class="dropdown"><a href="#"><span>المواد الدراسية</span> <i class="bi bi-chevron-down"></i></a>

                <ul>
                <li><a href="{{url('FstYear')}}" class="dropdown-item"><i class="fas fa-angle-left"></i>السنة الأولى</a></a></li>
                <li><a href="{{url('ScndYear')}}" class="dropdown-item"><i class="fas fa-angle-left"></i>السنة الثانية</a></a></li>
                <li><a href="{{url('ThrdYear')}}" class="dropdown-item"><i class="fas fa-angle-left"></i>السنة الثالثة</a></a></li>
                <li><a href="{{url('FrthYear')}}" class="dropdown-item"><i class="fas fa-angle-left"></i>السنة الرابعة</a></a></li>
                <li><div class="dropdown-divider"></div></li>
                <li><a href="" class="dropdown-item"><i class="fas fa-angle-left"></i>المواد المشتركة</a></a></li>
                </ul>
            </li>
        </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    </div>
</header>
