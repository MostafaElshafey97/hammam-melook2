@extends('Front.master')
@section('content')

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
<a href="{{url('/')}}">الرئيسية</a>
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




@endsection