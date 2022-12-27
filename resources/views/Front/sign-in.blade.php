@extends('Front.master')
@section('content')


<div class="page-title-wrap">
<div class="page-title-area title-img-six">
<div class="title-shape">
<img src="{{asset('Front/images/title/title-shape1.png')}}" alt="Shape">

</div>
<div class="d-table">
<div class="d-table-cell">
<div class="title-content">
<h2>تسجيل الدخول</h2>
<ul>
<li>
<a href="{{url('/')}}">الرئيسية</a>
</li>
<li>
<span>تسجيل الدخول</span>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>


<div class="user-area ptb-100">
<div class="container">
<div class="user-item">
<div class="user-shape">
<img src="{{asset('Front/images/contact-shape1.png')}}" alt="Shape">

<img src="{{asset('Front/images/contact-shape2.png')}}" alt="Shape">
</div>
<h2>تسجيل الدخول</h2>
<form>
<div class="form-group">
<input type="email" class="form-control" placeholder="الايميل">
</div>
<div class="form-group">
<input type="Password" class="form-control" placeholder="الباسوورد">
</div>
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
<label class="form-check-label" for="defaultCheck7">
قبول <a href="terms-conditions.html">شروط واحكام الخدمات</a> و <a href="privacy-policy.html"> سياسةالخصوصية</a>
</label>
</div>
</div>
<button type="submit" class="btn common-btn two">دخول</button>
<p>Or</p>
<a class="common-btn two" href="sign-in.html#" target="_blank">
<i class='bx bxl-google-plus'></i>
تسجيل الدخول باستخدام حساب جوجل
</a>
<h4>أليس لديك حساب؟ <a href="{{route('client.register')}}">انشاء حساب جديد</a></h4>
</form>
</div>
</div>
</div>

@endsection