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


<div class="banner-area-three">
<div class="banner-shape-three">
<img src="{{asset('Front/images/banner/banner-shape12.png')}}" alt="Shape">
</div>
<div class="rev_slider_wrapper">
<div id="rev_slider_1" class="rev_slider" data-version="5.4.5" style="display:none">
<ul>
<li data-index="rs-1" data-transition="fade">

<img src="{{asset('Front/images/banner/banner1.jpg')}}" alt="Nature" class="rev-slidebg">


<div class="tp-caption banner-h1 tp-resizeme" data-x="center" data-hoffset="" data-y="center" data-voffset="['-50','-50','-40','0']" data-fontsize="['95','70','35','35']" data-lineheight="['110','80','55','55']" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:90deg;rY:0deg;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Back.easeOut"},{"delay":"wait","speed":700,"to":"auto:auto;","ease":"nothing"}]' data-textAlign="['center','center','center','center']" style="z-index: 9; color:tomato; white-space: nowrap; line-height: 1.2;">
عيش حياتك <br> بلحظات من الاستجمام
</div>

<div class="tp-caption tp-resizeme" data-x="center" data-y="center" data-voffset="['100','80','60','100']" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:360deg;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;","speed":1200,"to":"o:1;","delay":1700,"ease":"Back.easeOut"},{"delay":"wait","speed":700,"to":"auto:auto;","ease":"nothing"}]' data-textAlign="['center','center','center','center']" style="z-index: 11;border-width:0px;">
<a class="common-btn three" href="appointment.html#">احجز الان</a>
</div>
</li>
<li data-index="rs-2" data-transition="fade">

<img src="{{asset('Front/images/banner/banner2.jpg')}}" alt="Nature" class="rev-slidebg">

<div class="tp-caption banner-h1 tp-resizeme" data-x="center" data-hoffset="" data-y="center" data-voffset="['-50','-50','-40','0']" data-fontsize="['95','70','35','35']" data-lineheight="['110','80','55','55']" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:90deg;rY:0deg;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Back.easeOut"},{"delay":"wait","speed":700,"to":"auto:auto;","ease":"nothing"}]' data-textAlign="['center','center','center','center']" style="z-index: 9;color:tomato; white-space: nowrap; line-height: 1.2;">
    احصل على الاسترخاء الكامل  <br> لجسمك وعقلك
</div>

<div class="tp-caption tp-resizeme" data-x="center" data-y="center" data-voffset="['100','80','60','100']" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:360deg;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;","speed":1200,"to":"o:1;","delay":1700,"ease":"Back.easeOut"},{"delay":"wait","speed":700,"to":"auto:auto;","ease":"nothing"}]' data-textAlign="['center','center','center','center']" style="z-index: 11;border-width:0px;">
    <a class="common-btn three" href="appointment.html#">احجز الان</a>
</div>
 </li>
<li data-index="rs-3" data-transition="fade">

<img src="{{asset('Front/images/banner/banner3.jpg')}}" alt="Nature" class="rev-slidebg">

<div class="tp-caption banner-h1 tp-resizeme" data-x="center" data-hoffset="" data-y="center" data-voffset="['-50','-50','-40','0']" data-fontsize="['95','70','35','35']" data-lineheight="['110','80','55','55']" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:90deg;rY:0deg;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;","speed":1000,"to":"o:1;","delay":1500,"ease":"Back.easeOut"},{"delay":"wait","speed":700,"to":"auto:auto;","ease":"nothing"}]' data-textAlign="['center','center','center','center']" style="z-index: 9; color:tomato; white-space: nowrap; line-height: 1.2;">
    يساعد الاسترخاء على  <br> استعادة جمالك
</div>

<div class="tp-caption tp-resizeme" data-x="center" data-y="center" data-voffset="['100','80','60','100']" data-width="['auto']" data-height="['auto']" data-type="text" data-responsive_offset="on" data-frames='[{"from":"z:0;rX:0;rY:360deg;rZ:0;sX:0.5;sY:0.5;skX:0;skY:0;opacity:0;","speed":1200,"to":"o:1;","delay":1700,"ease":"Back.easeOut"},{"delay":"wait","speed":700,"to":"auto:auto;","ease":"nothing"}]' data-textAlign="['center','center','center','center']" style="z-index: 11;border-width:0px;">
<a class="common-btn three" href="appointment.html#">احجز الان</a>
</div>
</li>
</ul>
</div>
</div>
</div>



<br><br><br><br>
<hr>



<section class="services-area three ptb-100">
<div class="services-shape">
<img src="{{asset('Front/images/services/services-shape1.png')}}" alt="Shape">
</div>
<div class="container">
<div class="section-title">
<h2>خدماتنا</h2>
<p>في حمام الملوك دوماّ نهتم بك وبكل ما يجعلنا نقدم اليك خدمة مميزة بالاضافة الى التطوير المستمر في برامجنا الخاصة


</p>
</div>
<div class="row">
<div class="col-sm-6 col-lg-3">
<div class="services-item">
<div class="inner">
<img src="{{asset('Front/images/services/services1.jpg')}}" alt="Services">

<h3>
<a href="service-details.html">تجهيز العروسين</a>
</h3>
<p>برنامج شهرزاد العروسه | برنامج شهريار العريس |</p>
<a class="services-btn" href="service-details.html">تفاصيل اكثر </a>
</div>
</div>
</div>


<div class="col-sm-6 col-lg-3">
<div class="services-item">
<div class="inner">
<img src="{{asset('Front/images/services/services2.jpg')}}
" alt="Services">
<h3>
<a href="service-details.html">العناية بالبشرة</a>
</h3>
<p>| تقنيه الديرما بن الديرما بلانينج | | العلاج الضوئي للبشره نتـــوياج عــــادي | نتوياج عـميــــق | هـــيدرافيشال HYDRAFACIAL

</p>
<a class="services-btn" href="service-details.html">تفاصيل اكثر</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="services-item">
<div class="inner">
<img src="{{asset('Front/images/services/services3.jpg')}}
" alt="Services">
<h3>
<a href="service-details.html">عناية باليدين والقدمين</a>
</h3>
<p>شــــمع البرافيين | البـاديـكـــــيــر والــمانكــير |</p>
<a class="services-btn" href="service-details.html">تفاصيل اكثر</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="services-item">
<div class="inner">
<img src="{{asset('Front/images/services/services4.jpg')}}
" alt="Services">
<h3>
<a href="service-details.html">حمامات </a>
</h3>
<p>| الحمام السوداني حمام الملوك | | حمام التركي حمام العلاجي | حمام كليوبترا |


</p>
<a class="services-btn" href="service-details.html">تفاصيل اكثر</a>
</div>
</div>
</div>
</div>
<div class="text-center">
<a class="common-btn three" href="services.html">مشاهدة كل الخدمات</a>
</div>
</div>
</section>


<section class="skin-area two pt-100 pb-70">
<div class="skin-shape">
<img src="{{asset('Front/images/skin-shape2.png')}}" alt="Shape">

</div>
<div class="container-fluid">
<div class="row align-items-center">
<div class="col-lg-6">
<div class="skin-content">
<div class="section-title two">
<h2>منتجاتنا الجديدة للعناية بالبشرة من أجلك</h2>
<p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...

</p>
<p>لوريم ايبسوم هو نموذج افتراضي يوضع في التصاميم لتعرض على العميل ليتصور طريقه وضع النصوص بالتصاميم سواء كانت تصاميم مطبوعه ... بروشور او فلاير على سبيل المثال ... او نماذج مواقع انترنت ...

</p>
</div>
<a class="common-btn three" href="shop.html">Shop Now</a>
</div>
</div>
<div class="col-lg-6">
<div class="skin-img">
<img src="{{asset('Front/images/skin-main.jpg')}}" alt="Skin">
<img src="{{asset('Front/images/skin-shape1.png')}}" alt="Shape">

</div>
</div>
</div>
</div>
</section>


<div class="booking-area pb-70">
<div class="container">
<div class="row">
<div class="col-sm-6 col-lg-6">
<div class="booking-item">
<img src="{{asset('Front/images/booking1.jpg')}}" alt="Booking">

<div class="inner">
<h3>قم بالحجز قبل قدومك</h3>
<a class="common-btn three" href="appointment.html">احجز موعد</a>
</div>
</div>
</div>
<div class="col-sm-6 col-lg-6">
<div class="booking-item">
<img src="{{asset('Front/images/booking2.jpg')}}" alt="Booking">

<div class="inner">
<h3>اشتري بطاقة هدية لأصدقائك</h3>
<a class="common-btn three" href="404.html">شراء بطاقة هدايا</a>
</div>
</div>
</div>
</div>
</div>
</div>


<div class="pricing-area pb-70">
<div class="container-fluid p-0">
<div class="row m-0">
<div class="col-lg-6 p-0">
<div class="pricing-img">
<img src="{{asset('Front/images/pricing1.jpg')}}" alt="Pricing">

 </div>
</div>
<div class="col-lg-6 p-0">
<div class="pricing-content">
<div class="pricing-shape">
<img src="{{asset('Front/images/pricing-shape1.png')}}" alt="Shape">

</div>
<div class="top">
<h3>خدمات ازالة الشعر</h3>
</div>
<div class="bottom">
<ul>
<li>
سويت كامل<span>$50.00+</span>
</li>
<li>
    سويت نص رجل<span>$35.00+</span>
</li>
<li>
سويت رجل<span>$32.00+</span>
</li>
<li>
سويت ايد ورجل كاملة<span>$10.00+</span>
</li>
<li>
سويت كامل بدون اندرام وبكيني<span>$55.00+</span>
</li>
<li>
سويت ايد كاملة<span>$60.00+</span>
</li>
<li>
سويت نص ايد<span>$65.00+</span>
</li>
<li>
سويت ظهر<span>$80.00+</span>
</li>
<li>
سويت بطن<span>$80.00+</span>
</li>
<li>
سويت اندر ارم<span>$25.00+</span>
</li>
<li>
سويت بكيني<span>$250.00+</span>
</li>

</ul>
</div>
</div>
</div>
<div class="col-lg-6 p-0">
<div class="pricing-content two">
<div class="pricing-shape">
<img src="{{asset('Front/images/pricing-shape1.png')}}" alt="Shape">


</div>
<div class="top">
<h3>خدمات الحمام </h3>
</div>
<div class="bottom">
<ul>
<li>
داي يوز<span>$50.00+</span>
</li>
<li>
حمام تركي<span>$35.00+</span>
 </li>
<li>
حمام مغربي<span>$32.00+</span>
</li>
<li>
حمام الملوك<span>$10.00+</span>
</li>
<li>
حمام سوداني<span>$55.00+</span>
</li>
<li>
حمام كليو باترا<span>$60.00+</span>
</li>
<li>
حمام علاجي<span>$65.00+</span>
</li>
<li>
حمام تركي فردين<span>$80.00+</span>
</li>
<li>
حمام مغربي فردين<span>$80.00+</span>
</li>
<li>
حمام مغربي ثلاث افراد<span>$25.00+</span>
</li>
<li>
حمام ملوك فردين<span>$250.00+</span>
</li>
<li>
حمام ملوك ثلاث افراد<span>$100.00+</span>
</li>
<li>
حمام ملوك ثلاث افراد<span>$100.00+</span>
</li>
<li>
حمام ملوك ثلاث افراد<span>$100.00+</span>
</li>
<li>
حمام ملوك ثلاث افراد<span>$100.00+</span>
</li>
<li>
حمام ملوك ثلاث افراد<span>$100.00+</span>
</li>
</ul>
</div>
</div>
</div>
<div class="col-lg-6 p-0">
<div class="pricing-img two">
<img src="{{asset('Front/images/pricing2.jpg')}}" alt="Pricing">

</div>
</div>
</div>
</div>
</div>


<section class="get-area three">
<div class="container">
<div class="get-content">
<div class="get-shape">
<img src="{{asset('Front/images/get-shape1.png')}}" alt="Shape">

<img src="{{asset('Front/images/get-shape2.png')}}" alt="Shape">

</div>
<div class="section-title">
<h2>  تحتاج إلى أيدي احترافية للتخلص من الإجهاد اليومي والشعور بالاسترخاء</h2>
</div>
<a class="common-btn three" href="{{route('appointment')}}">احجز موعد</a>
</div>
</div>
</section>


<div class="counter-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-sm-6 col-lg-3">
<div class="counter-item">
<img src="{{asset('Front/images/counter-shape.png')}}" alt="Shape">
<h3>
<span class="odometer" data-count="500">00</span>
<span class="target">+</span>
</h3>
<p>عملائنا</p>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="counter-item">
<img src="{{asset('Front/images/counter-shape.png')}}" alt="Shape">

<h3>
<span class="odometer" data-count="15">00</span>
<span class="target">+</span>
</h3>
<p>سنين الخبرة</p>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="counter-item">
<img src="{{asset('Front/images/counter-shape.png')}}" alt="Shape">
<h3>
<span class="odometer" data-count="250">00</span>
<span class="target">+</span>
</h3>
<p>التعليقات</p>
</div>
</div>
<div class="col-sm-6 col-lg-3">
<div class="counter-item">
<img src="{{asset('Front/images/counter-shape.png')}}" alt="Shape">
<h3>
<span class="odometer" data-count="100">00</span>
<span class="target">+</span>
</h3>
<p>الاجراءات</p>
</div>
</div>
</div>
</div>
</div>



<div class="video-area three">
<div class="video-shape">
<img src="{{asset('Front/images/video-shape2.png')}}" alt="Shape">
</div>
<div class="d-table">
<div class="d-table-cell">
<div class="container-fluid p-0">
<div class="video-item">
<div class="video-wrap">
<button class="js-modal-btn" data-video-id="rl86rVdys9k
">
<i class='bx bx-play'></i>
</button>
</div>
<h3>شاهد كيف نعمل</h3>
</div>
</div>
</div>
</div>
</div>



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
<img src="{{asset('Front/images/footer-logo.png')}}" alt="Footer">

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