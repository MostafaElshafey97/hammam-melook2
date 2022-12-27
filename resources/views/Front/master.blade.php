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
<link rel="icon" type="image/png" href="{{asset('Front/images/logo11.png')}}">
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
<a href="{{url('/')}}" class="logo">
<img src="{{asset('Front/images/logo11.png')}}" alt="Logo">

</a>
</div>

<div class="main-nav three four">
<div class="container-fluid">
<nav class="navbar navbar-expand-md navbar-light">
<a class="navbar-brand" href="{{url('/')}}">
<img src="{{asset('Front/images/logo11.png')}}" alt="Logo">
</a>
<div class="collapse navbar-collapse mean-menu" id="navbarSupportedContent">
<ul class="navbar-nav">
<li class="nav-item">
    <a href="{{url('/')}}" class="nav-link dropdown-toggle active">الرئيسية</a>

</li>
<li class="nav-item">
<a href="index-3.html#" class="nav-link dropdown-toggle">الصفحات <i class='bx bx-plus'></i></a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="" class="nav-link dropdown-toggle">المستخدم <i class='bx bx-plus'></i></a>
<ul class="dropdown-menu">
<li class="nav-item">
<a href="{{route('client.login')}}" class="nav-link">تسجيل الدخول</a>
</li>
 <li class="nav-item">
<a href="{{route('client.register')}}" class="nav-link"> انشاء حساب جديد</a>
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
<a href="{{ route('service') }}" class="nav-link dropdown-toggle">خدماتنا </a>

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
@yield('content')



<footer class="footer-area three pt-100 pb-70">
<div class="footer-shape">
<img src="{{asset('Front/images/footer-shape1.png')}}" alt="Shape">

<img src="{{asset('Front/images/footer-shape2.png')}}
" alt="Shape">
</div>
<div class="container">
<div class="row">
<div class="col-sm-6 col-lg-4">
<div class="footer-item">
<div class="footer-contact">
<h3>معلومات الاتصال:</h3>
<ul class="info">
<li>
<a href="index-3.html#">فرع المنصورة:
المنـصوره شـارع الجمــهوريـه بجـــوار فيــلا غيــث وامــام مـركز النـصر الرياضــي</a>
</li>
<li>
<span>الهاتف:</span>
<a href="tel:9645658765">01061010550</a>
</li>
<li>
<span>الايميل:</span>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#96fef3fafaf9d6fcf3f3fab8f5f9fb"><span class="__cf_email__" data-cfemail="b0d8d5dcdcdff0dad5d5dc9ed3dfdd">[email&#160;protected]</span></a>
</li>

<li>
<a href="index-3.html#">فرع الزقازيق:
     
الزقازيق القوميه بجوار مطعم طأطأ ونصرالدين للملابس وبجوار مسجد وماركت أم القري</a>
</li>
<li>
<span>الهاتف:</span>
<a href="tel:9645658765">01061010550</a>
</li>
<li>
<span>الايميل:</span>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#96fef3fafaf9d6fcf3f3fab8f5f9fb"><span class="__cf_email__" data-cfemail="b0d8d5dcdcdff0dad5d5dc9ed3dfdd">[email&#160;protected]</span></a>
</li>

</ul>
<ul class="social">
<li>
<a href="https://ar-ar.facebook.com/hammam.elmlook/" target="_blank">
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
</div>
<div class="col-sm-6 col-lg-4">
<div class="footer-item">
<div class="footer-img">
<a href="index.html">
<img src="{{asset('Front/images/logo-footer.png')}}" alt="Footer">

</a>
</div>
</div>
</div>
<div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
<div class="footer-item">
<h3>ساعات العمل:</h3>
<div class="footer-hours">
<div class="left">
<ul>
<li>السبت:</li>
<li>الاحد:</li>
<li>الاثنين:</li>
<li>الثلاثاء:</li>
<li>الاربعاء:</li>
<li>الخميس:</li>
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


<div class="copyright-area three">
<div class="container">
<div class="copyright-item">
<p>Copyright @<script data-cfasync="false" src="../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script>document.write(new Date().getFullYear())</script> تم تصميم الموقع وبرمجته بواسطة  <a href="" target="_blank">م/مصطفي الشافعي</a></p>
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