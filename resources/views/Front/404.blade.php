
@extends('Front.master')
@section('content')

<div class="error-area">
<div class="d-table">
<div class="d-table-cell">
<div class="container">
<div class="error-content">
<i class='bx bxs-sad bx-flashing'></i>
<h1>نأسف لذلك!</h1>
<h2>هنا بعض المشاكل</h2>
<p>ربما تم حذف الصفحة التي تبحث عنها</p>
<a class="common-btn two" href="{{url('/')}}">العودة الي الصفحة الرئيسية</a>
</div>
</div>
</div>
</div>
</div>


<div class="go-top">
<i class='bx bxs-up-arrow-alt'></i>
<i class='bx bxs-up-arrow-alt'></i>
</div>

@endsection