<!DOCTYPE html>
<html lang="ar" dir="rtl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" href="{{asset('Front/css/bootstrap.rtl.min.css')}}">

<link rel="stylesheet" href="{{asset('Front/css/boxicons.min.css')}}">

<link rel="stylesheet" href="{{asset('Front/css/meanmenu.css')}}">

<link rel="stylesheet" href="{{asset('Front/css/animate.min.css')}}">

<link rel="stylesheet" href="{{asset('Front/css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('Front/css/owl.theme.default.min.css')}}">


<link rel="stylesheet" href="assets/css/modal-video.min.css">

<link rel="stylesheet" href="{{asset('Front/css/odometer.min.css')}}">


<link rel="stylesheet" type="text/css" href="{{asset('Front/css/settings.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('Front/css/layers.css')}}">

<link rel="stylesheet" type="text/css" href="{{asset('Front/css/navigation.css')}}">

<link rel="stylesheet" href="{{asset('Front/css/nice-select.min.css')}}">


<link rel="stylesheet" href="{{asset('Front/css/style.css')}}">

<link rel="stylesheet" href="{{asset('Front/css/responsive.css')}}">


<link rel="stylesheet" href="{{asset('Front/css/theme-dark.css')}}">


<link rel="stylesheet" href="{{asset('Front/css/rtl.css')}}">

<title>حمام الملوك</title>
<link rel="icon" type="image/png" href="{{asset('Front/images/logo.png')}}">
</head>
<body>

<div class="loader">
<div class="d-table">
<div class="d-table-cell">
<div class="loading">
<div></div>
<div></div>
<div></div>
<div></div>
</div>
</div>
</div>
</div>

@php
$site = DB::table('sittings')->first();
@endphp
<div class="header-area three">
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-sm-3 col-lg-3">
<div class="left">
<ul>
<li>
<a href="{{ $site->facebook }}" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
<li>
<a href="index-3.html#" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="index-3.html#" target="_blank">
<i class='bx bxl-pinterest-alt'></i>
</a>
</li>
<li>
<a href="index-3.html#" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="index-3.html#" target="_blank">
<i class='bx bxl-youtube'></i>
</a>
</li>
</ul>
</div>
</div>

<div class="col-sm-9 col-lg-9">
<div class="right">
<ul>
<li>
<i class='bx bx-mail-send'></i>
<span>راسلنا:</span>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#0d65686161624d67686861236e6260"><span class="__cf_email__" data-cfemail="335b565f5f5c735956565f1d505c5e">{{ $site->email1 }}</span></a>
</li>
<li>
<i class='bx bx-phone-call'></i>
<span>اتصل الان:</span>

<a href="tel:9905324936">{{ $site->phone_two }}</a>
</li>

</ul>
</div>
</div>
</div>
</div>
</div>


<div class="navbar-area sticky-top">

<div class="mobile-nav">
<a href="index.html" class="logo">
<img src="{{asset('Front/images/logo.png')}}" alt="Logo">

</a>
</div>

<div class="main-nav three four">
<div class="container-fluid">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="index.html">
<img src="{{asset('Front/images/logo.png')}}" alt="Logo">
</a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item">
    <a href="index.html" class="nav-link dropdown-toggle active">الرئيسية</a>

</li>
<li class="nav-item">
<a href="index-3.html#" class="nav-link dropdown-toggle">الصفحات <i class='bx bx-plus'></i></a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="index-3.html#" class="nav-link dropdown-toggle">المستخدم <i class='bx bx-plus'></i></a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="sign-in.html" class="nav-link">تسجيل الدخول</a>
</li>
 <li class="nav-item">
<a href="sign-up.html" class="nav-link"> انشاء حساب جديد</a>
</li>
</ul>
</li>

<li class="nav-item">
<a href="{{route('appointment')}}" class="nav-link">المواعيد</a>
</li>




<li class="nav-item">
<a href="privacy-policy.html" class="nav-link">سياسة الخصوصية </a>
</li>
<li class="nav-item">
<a href="terms-conditions.html" class="nav-link">الشروط والاحكام</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="{{ route('about') }}" class="nav-link">من نحن</a>
</li>
<li class="nav-item">
<a href="index-3.html#" class="nav-link dropdown-toggle">خدماتنا <i class='bx bx-plus'></i></a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="services.html" class="nav-link">الخدمات</a>
</li>
<li class="nav-item">
<a href="service-details.html" class="nav-link">تفاصيل الخدمة</a>
</li>
</ul>
</li>
<li class="nav-item">
<a href="index-3.html#" class="nav-link dropdown-toggle">برامجنا <i class='bx bx-plus'></i></a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="blog.html" class="nav-link">البرامج</a>
</li>
<li class="nav-item">
<a href="blog-details.html" class="nav-link">نفاصيل البرنامج </a>
</li>
</ul>
</li>

<li class="nav-item">
<a href="{{ route('contact') }}" class="nav-link">اتصل بنا</a>
</li>
</ul>
<div class="side-nav three">
<div class="nav-search">
<i id="search-btn" class="bx bx-search-alt"></i>
<div id="search-overlay" class="block">
<div class="centered">
<div id="search-box">
<i id="close-btn" class="bx bx-x"></i>
<form>
<input type="text" class="form-control" placeholder="Search..." />
<button type="submit" class="btn">Search</button>
</form>
</div>
</div>
</div>
</div>

<a class="common-btn three nav-btn" href="{{route('appointment')}}">احجز الان</a>
</div>
</div>
</nav>
</div>
</div>
</div>


<div class="page-title-wrap">
<div class="page-title-area title-img-seven">
<div class="title-shape">
<img src="assets/images/title/title-shape1.png" alt="Shape">
</div>
<div class="d-table">
<div class="d-table-cell">
<div class="title-content">
<h2>الحجز</h2>
<ul>
<li>
<a href="index.html">الرئيسية</a>
</li>
<li>
<span>حجز موعد</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="appointment-area ptb-100">
<div class="container">
<div class="appointment-content">
<div class="appointment-shape">
<img src="assets/images/contact-shape1.png" alt="Shape">
<img src="assets/images/contact-shape2.png" alt="Shape">
</div>
<form>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Your Name">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="email" class="form-control" placeholder="Your Email">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Address">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" class="form-control" placeholder="Phone">
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<select>
<option>Select Your Service</option>
<option>Some option</option>
<option>Another option</option>
<option>Potato</option>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<select>
<option>Select Specialist</option>
<option>Some option</option>
<option>Another option</option>
<option>Potato</option>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<select>
<option>Select Date</option>
<option>Some option</option>
<option>Another option</option>
<option>Potato</option>
</select>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<select>
<option>Select Time</option>
<option>Some option</option>
<option>Another option</option>
<option>Potato</option>
</select>
</div>
</div>
<div class="col-lg-12">
<div class="text-center">
<button type="submit" class="btn common-btn two">احجز  </button>
</div>
</div>
</div>
</form>
</div>
</div>
</div>


<footer class="footer-area two pt-100 pb-70">
<div class="footer-shape">
<img src="assets/images/footer-shape1.png" alt="Shape">
</div>
<div class="container">
<div class="row">
<div class="col-sm-6 col-lg-4">
<div class="footer-item">
<div class="footer-contact">
<h3>معلومات الاتصال :</h3>
<ul class="info">
<li>
<a href="appointment.html#">3 Edgar Buildings, George Street, BA1 2FJ</a>
</li>
<li>
<span>Hotline:</span>
<a href="tel:9645658765">964-565-8765</a>
</li>
<li>
<span>Hotline:</span>
<a href="tel:5464169576">546-416-9576</a>
</li>
<li>
<span>Email:</span>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#177f727b7b78577d72727b3974787a"><span class="__cf_email__" data-cfemail="92faf7fefefdd2f8f7f7febcf1fdff">[email&#160;protected]</span></a>
</li>
<li>
<span>Email:</span>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#90f9fef6ffd0faf5f5fcbef3fffd"><span class="__cf_email__" data-cfemail="8de4e3ebe2cde7e8e8e1a3eee2e0">[email&#160;protected]</span></a>
</li>
</ul>
<ul class="social">
<li>
<a href="appointment.html#" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
<li>
<a href="appointment.html#" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="appointment.html#" target="_blank">
<i class='bx bxl-pinterest-alt'></i>
</a>
</li>
<li>
<a href="appointment.html#" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="appointment.html#" target="_blank">
<i class='bx bxl-youtube'></i>
</a>
</li>
</ul>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="footer-item">
<div class="footer-img">
<a href="index.html">
<img src="assets/images/logo-two.png" alt="Footer">
</a>
</div>
</div>
</div>
<div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
<div class="footer-item">
<h3>Open Hours:</h3>
<div class="footer-hours">
<div class="left">
<ul>
<li>Saturday:</li>
<li>Sunday:</li>
 <li>Monday:</li>
<li>Tuesday:</li>
<li>Wednesday:</li>
<li>Thursday:</li>
</ul>
</div>
<div class="right">
<ul>
<li>
08:00
<span>23:00</span>
</li>
<li>
08:00
<span>23:00</span>
</li>
<li>
08:00
<span>21:00</span>
</li>
<li>
09:00
<span>23:00</span>
</li>
<li>
09:00
<span>23:00</span>
</li>
<li>
09:00
<span>23:00</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</footer>


<div class="copyright-area two">
<div class="container">
<div class="copyright-item">
<p>Copyright @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> Jeel. Designed By <a href="https://hibootstrap.com/" target="_blank">HiBootstrap</a></p>
</div>
</div>
</div>


<div class="go-top">
<i class='bx bxs-up-arrow-alt'></i>
<i class='bx bxs-up-arrow-alt'></i>
</div>


<script src="{{asset('Front/js/jquery.min.js')}}"></script>

<script src="{{asset('Front/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('Front/js/form-validator.min.js')}}"></script>


<script src="{{asset('Front/js/contact-form-script.js')}}"></script>

<script src="{{asset('Front/js/jquery.ajaxchimp.min.js')}}"></script>

<script src="{{asset('Front/js/jquery.meanmenu.js')}}"></script>

<script src="{{asset('Front/js/wow.min.js')}}"></script>

<script src="{{asset('Front/js/owl.carousel.min.js')}}"></script>

<script src="{{asset('Front/js/jquery-modal-video.min.js')}}"></script>

<script src="{{asset('Front/js/odometer.min.js')}}"></script>

<script src="{{asset('Front/js/jquery.appear.min.js')}}"></script>


<script src="{{asset('Front/js/jquery.themepunch.tools.min.js')}}"></script>

<script src="{{asset('Front/js/jquery.themepunch.revolution.min.js')}}"></script>

<script src="{{asset('Front/js/extensions/revolution.extension.actions.min.js')}}"></script>


<script src="{{asset('Front/js/extensions/revolution.extension.carousel.min.js')}}"></script>

<script src="{{asset('Front/js/extensions/revolution.extension.kenburn.min.js')}}"></script>

<script src="{{asset('Front/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>

<script src="{{asset('Front/js/extensions/revolution.extension.migration.min.js')}}"></script>

<script src="{{asset('Front/js/extensions/revolution.extension.navigation.min.js')}}"></script>

<script src="{{asset('Front/js/extensions/revolution.extension.parallax.min.js')}}"></script>

<script src="{{asset('Front/js/extensions/revolution.extension.slideanims.min.js')}}"></script>

<script src="{{asset('Front/js/extensions/revolution.extension.video.min.js')}}"></script>


<script src="{{asset('Front/js/jquery.nice-select.min.js')}}"></script>

<script src="{{asset('Front/js/custom.js')}}"></script>


</body>
</html>