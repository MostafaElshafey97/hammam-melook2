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
<h2>انشاء حساب جديد</h2>
<ul>
<li>
<a href="{{url('/')}}">الرئيسية</a>
</li>
<li>
<span>انشاء حساب جديد</span>
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
<h2>انشاء حساب جديد</h2>
<form>
<div class="form-group">
<input type="text" class="form-control" placeholder="اسم المستخدم">
</div>
<div class="form-group">
<input type="email" class="form-control" placeholder="الايميل">
</div>
<div class="form-group">
<input type="Password" class="form-control" placeholder="الرقم السري">
</div>
<div class="form-group">
<input type="Password" class="form-control" placeholder="تأكيد الرقم السري">
</div>
<div class="form-group">
<div class="form-check">
<input class="form-check-input" type="checkbox" value="" id="defaultCheck7">
<label class="form-check-label" for="defaultCheck7">
قبول <a href="terms-conditions.html">شروط واحكام الخدمات</a> و <a href="privacy-policy.html"> سياسةالخصوصية</a>
</label>
</div>
</div>
<button type="submit" class="btn common-btn two">تسجيل حساب جديد</button>
<p>أو</p>
<a class="common-btn two" href="sign-up.html#" target="_blank">
<i class='bx bxl-google-plus'></i>
تسجيل الدخول بحساب جوجل</a>
<h4>هل لديك حسابا اخر؟ <a href="{{route('client.login')}}">تسجيل الدخول</a></h4>
</form>
</div>
</div>
</div>

@endsection