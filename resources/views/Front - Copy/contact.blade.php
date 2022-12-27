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


<div class="page-title-wrap">
<div class="page-title-area title-img-five">
<div class="title-shape">
<img src="{{asset('Front/images/title/title-shape1.png')}}" alt="Shape">

</div>
<div class="d-table">
<div class="d-table-cell">
<div class="title-content">
<h2>اتصل بنا</h2>
<ul>
<li>
<a href="index.html">الرئيسية</a>
</li>
<li>
<span>اتصل بنا</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="contact-info-area pt-100 pb-70">
<div class="container">
<div class="row">
<div class="col-sm-6 col-lg-4">
<div class="contact-info-item">
<h3>العنوان:</h3>
<ul>
 <li>
<a href="contact.html#">
    فرع المنصوره
    المنـصوره شـارع الجمــهوريـه بجـــوار فيــلا غيــث وامــام مـركز النـصر الرياضــي</a>
</li>
<li>
<a href="contact.html#">
    فرع الزقازيق
    الزقازيق القوميه بجوار مطعم طأطأ ونصرالدين للملابس وبجوار مسجد وماركت أم القري</a>
</li>
</ul>
</div>
</div>
<div class="col-sm-6 col-lg-4">
<div class="contact-info-item active">
<h3>أرقام الهاتف:</h3>
<ul>
<li>
<a href="tel:+9905325968">المنصورة : 01010386792</a>
</li>
<li>
    <a href="tel:+9905325968">المنصورة : 01010386792</a>
</li>
<li>
    <a href="tel:+9905325968">الزقازيق : 01010386792</a>
</li>
<li>
    <a href="tel:+9905325968">الزقازيق : 01010386792</a>
</li>
</ul>
</div>
</div>
<div class="col-sm-6 offset-sm-3 offset-lg-0 col-lg-4">
<div class="contact-info-item">
<h3>Email:</h3>
<ul>
<li>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#640c0108080b240e0101084a070b09"><span class="__cf_email__" data-cfemail="3b535e5757547b515e5e5715585456">hammamelmolook1@gmail.com</span></a>
</li>
<li>
    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#640c0108080b240e0101084a070b09"><span class="__cf_email__" data-cfemail="3b535e5757547b515e5e5715585456">hammamelmolook2@gmail.com</span></a>
</li>
<li>
    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#640c0108080b240e0101084a070b09"><span class="__cf_email__" data-cfemail="3b535e5757547b515e5e5715585456">hammamelmolook3@gmail.com</span></a>
</li>
<li>
    <a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#640c0108080b240e0101084a070b09"><span class="__cf_email__" data-cfemail="3b535e5757547b515e5e5715585456">hammamelmolook4@gmail.com</span></a>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="contact-form-area pb-100">
<div class="container">
<div class="form-item">
<div class="contact-shape">

<img src="{{asset('Front/images/contact-shape1.png')}}" alt="Shape">
<img src="{{asset('Front/images/contact-shape2.png')}}" alt="Shape">
</div>
<form id="contactForm">
<div class="section-title two">
<h2>ابقى على تواصل</h2>
</div>
<div class="row">
<div class="col-lg-6">
<div class="form-group">
<input type="text" name="name" id="name" class="form-control" placeholder="الاسم" required data-error="من فضلك ادخل الاسم">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="email" name="email" id="email" class="form-control" placeholder="الايميل" required data-error="من فضلك ادخل الايميل">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" name="phone_number" id="phone_number" placeholder="الهاتف" required data-error="من فضلك ادخل رقم هاتفك" class="form-control">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-6">
<div class="form-group">
<input type="text" name="msg_subject" id="msg_subject" class="form-control" placeholder="الموضوع" required data-error="من فضلك اختر الموضوع">
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12">
<div class="form-group">
<textarea name="message" class="form-control" id="message" cols="30" rows="8" placeholder="اكتب رسالة " required data-error="اكتب رسالتك"></textarea>
<div class="help-block with-errors"></div>
</div>
</div>
<div class="col-lg-12 col-md-12">
<div class="form-group">
<div class="form-check agree-label">
<input name="gridCheck" value="I agree to the terms and privacy policy." class="form-check-input" type="checkbox" id="gridCheck" required>
<label class="form-check-label" for="gridCheck">
قبول <a href="terms-conditions.html">شروط الخدمات</a> و <a href="privacy-policy.html">سياسة الخصوصية </a>
</label>
<div class="help-block with-errors gridCheck-error"></div>
</div>
</div>
</div>
<div class="col-lg-12">
<div class="text-center">
<button type="submit" class="btn common-btn two">ارسال</button>
<div id="msgSubmit" class="h3 text-center hidden"></div>
<div class="clearfix"></div>
</div>
</div>
</div>
</form>
</div>
</div>
</div>


<div class="map-area pb-100">
<div class="container">
<iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d59843174.53779285!2d62.17507173408571!3d23.728204508550363!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3663f18a24cbe857%3A0xa9416bfcd3a0f459!2sAsia!5e0!3m2!1sen!2sbd!4v1607262150019!5m2!1sen!2sbd" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
</div>


<footer class="footer-area two pt-100 pb-70">
<div class="footer-shape">
<img src="{{asset('Front/images/footer-shape1.png')}}" alt="Shape">
</div>
<div class="container">
<div class="row">
<div class="col-sm-6 col-lg-4">
<div class="footer-item">
<div class="footer-contact">
<h3>Contact Info:</h3>
<ul class="info">
<li>
<a href="contact.html#">3 Edgar Buildings, George Street, BA1 2FJ</a>
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
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#9bf3fef7f7f4dbf1fefef7b5f8f4f6"><span class="__cf_email__" data-cfemail="3f575a5353507f555a5a53115c5052">[email&#160;protected]</span></a>
</li>
<li>
<span>Email:</span>
<a href="https://templates.hibootstrap.com/cdn-cgi/l/email-protection#11787f777e517b74747d3f727e7c"><span class="__cf_email__" data-cfemail="2841464e4768424d4d44064b4745">[email&#160;protected]</span></a>
</li>
</ul>
<ul class="social">
<li>
<a href="contact.html#" target="_blank">
<i class='bx bxl-facebook'></i>
</a>
</li>
<li>
<a href="contact.html#" target="_blank">
<i class='bx bxl-twitter'></i>
</a>
</li>
<li>
<a href="contact.html#" target="_blank">
<i class='bx bxl-pinterest-alt'></i>
</a>
</li>
<li>
<a href="contact.html#" target="_blank">
<i class='bx bxl-linkedin'></i>
</a>
</li>
<li>
<a href="contact.html#" target="_blank">
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