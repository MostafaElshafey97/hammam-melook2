@extends('Front.master')
@section('content')

<div class="page-title-wrap">
<div class="page-title-area title-img-seven">
<div class="title-shape">
<img src="{{asset('Front/images/title/title-shape1.png')}}" alt="Shape">


</div>
<div class="d-table">
<div class="d-table-cell">
<div class="title-content">
<h2>الحجز</h2>
<ul>
<li>
<a href="{{url('/')}}">الرئيسية</a>
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
<img src="{{asset('Front/images/contact-shape1.png')}}" alt="Shape">

<img src="{{asset('Front/images/contact-shape2.png')}}" alt="Shape">
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


@endsection