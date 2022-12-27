@extends('Dashboard.layouts.master')
@section('title')
عروض الحمام
@stop
@section('css')
<link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />
@endsection


@section('page-header')
<!-- breadcrumb -->
<div class="breadcrumb-header justify-content-between">
    <div class="my-auto">
        <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">العرض</h4>
            <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                عرض جميع العروض</span>
        </div>
    </div>
</div>
<!-- breadcrumb -->
@endsection
@section('content')
@include('Dashboard.messages_alert')
<!-- row opened -->
<div class="btn-list"> <a aria-controls="multiCollapseExample1" aria-expanded="false"
        class="btn ripple btn-primary mb-3 mb-xl-0 collapsed" data-bs-toggle="collapse" href="#multiCollapseExample1"
        role="button">الحمامات</a> 
        <a aria-controls="multiCollapseExample2" aria-expanded="false"
        class="btn ripple btn-secondary mb-3 mb-xl-0" href="#multiCollapseExample2" data-bs-toggle="collapse"
        role="button">البشرة</a> 
        <a aria-controls="multiCollapseExample1 multiCollapseExample2"
        aria-expanded="false" class="btn ripple btn-success mb-3 mb-xl-0 collapsed" href=".multi-collapse"
        data-bs-toggle="collapse" role="button">عرض 500 للسيدات</a>
        <a aria-controls="multiCollapseExample1 multiCollapseExample2"
        aria-expanded="false" class="btn ripple btn-success mb-3 mb-xl-0 collapsed" href=".multi-collapse"
        data-bs-toggle="collapse" role="button"> العروسين </a>
        <a aria-controls="multiCollapseExample1 multiCollapseExample2"
        aria-expanded="false" class="btn ripple btn-success mb-3 mb-xl-0 collapsed" href=".multi-collapse"
        data-bs-toggle="collapse" role="button"> عروض الشعر </a>
     </div>
        <br>
<div class="row row-sm">
    <div class="card">
        <div class="card-body">
            <div class="card-content collapse show">
                <div class="card-body">
                    <div class="repeater-default">
                        <div class="form-group"> <label class="main-content-label tx-11 tx-medium tx-gray-600">اسم
                                العرض</label>
                            <input class="form-control" required="" type="text"> </div>
                        <div data-repeater-list="car">
                            <div data-repeater-item="">
                                <form class="form row" action="{{route('offres.store')}}" method="post">
                                    @csrf

                                    <div class="form-group">
                                        <div class="row row-sm">

                                            <div class="col-sm-9">
                                                <label class="main-content-label tx-11 tx-medium tx-gray-600">الخدمات
                                                </label>
                                                <div class="row row-sm">
                                                    <div class="col-sm-6">
                                                        <select
                                                            class="form-control select2-no-search select2-hidden-accessible"
                                                            tabindex="-1" aria-hidden="true">
                                                            <option label="Choose one"> </option>
                                                            @foreach(App\Models\Service::all() as $service)

                                                            <option label="{{$service->name}}"> </option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                    <div class="col-sm-4 mg-t-10 mg-sm-t-0">
                                                        <select
                                                            class="form-control select2-no-search select2-hidden-accessible"
                                                            tabindex="-1" aria-hidden="true" id="aissa" name="aisa">
                                                            <option label="الفرد"> </option>
                                                            <option value="1"> 1 </option>
                                                            <option value="2"> 2 </option>
                                                            <option value="3"> 3 </option>
                                                            <option value="4"> 4 </option>
                                                            <option value="5"> 5 </option>
                                                        </select>
                                                    </div>



                                                </div>

                                            </div>

                                            <div class="col-sm-3 mg-t-10 mg-sm-t-0"> <label
                                                    class="main-content-label tx-11 tx-medium tx-gray-600">السعر
                                                    قبل الاصلي</label>
                                                <input class="form-control" required="" type="text"> </div>

                                        </div>
                                        <div class="row" id="show">




                                        </div>
                                    </div>
                                    <script>
                                        var elem = document.getElementsByName('aisa');
                                        console.log(elem.length);
                                        for (var i = 0; i < elem.length; i++) {
                                            elem[i].addEventListener('change', function (e) {


                                                var value = e.target.value;

                                                const para = document.createElement("div");

                                                para.class = "col-sm-12"
                                                para.innerHTML +=
                                                    '<div class="col-sm-12 mg-t-10 mg-sm-t-0"><div class="col-sm-12 mg-t-10 mg-sm-t-0">  <label class="main-content-label tx-11 tx-medium tx-gray-600"> </label>' +
                                                    ' <input class="form-control" required="" value="' + value +
                                                    '" type="text" id="showaissa' + i + '" readonly> </div>' +
                                                    ' <div class="col-sm-12 mg-t-10 mg-sm-t-0"> <label class="main-content-label tx-11 tx-medium tx-gray-600">السعر الخصم</label>' +
                                                    ' <input class="form-control" required="" value="0" name="porcentage"id="showaporcen' +
                                                    i + '" type="text"> </div></div>';
                                                // const node = document.createTextNode('<br><div class="col-sm-3 mg-t-10 mg-sm-t-0"> <label class="main-content-label tx-11 tx-medium tx-gray-600"> </label>'+
                                                //                                                ' <input class="form-control" required="" value="'+value+'" type="text" id="showaissa'+i+'" readonly> </div>'+
                                                //                                                ' <div class="col-sm-3 mg-t-10 mg-sm-t-0"> <label class="main-content-label tx-11 tx-medium tx-gray-600">السعر الخصم</label>'+
                                                //                                                ' <input class="form-control" required="" value="0" name="porcentage"id="showaporcen'+i+'" type="text"> </div><br>');

                                                // para.appendChild(node);
                                                document.getElementById("show").appendChild(para);


                                            }, false);
                                        }

                                    </script>
                                    <div class="col-sm-6 mg-t-10 mg-sm-t-0">
                                        <button data-repeater-create="" class="btn btn-primary btn-lg">
                                            <i class="icon-plus4"></i> Add
                                        </button>
                                        <button type="button" class="btn btn-danger" data-repeater-delete=""> <i
                                                class="feather icon-x"></i> Delete</button>
                                    </div>

                                    <button type="submit" class="btn btn-success">Send</button>
                                </form>
                                <hr>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>











</div>
</div>
<div class="card-body">
    <div class="table-responsive">
        <table id="example" class="table key-buttons text-md-nowrap">
            <thead>
                <tr>
                    <th>#</th>
                    <th><input name="select_all" id="example-select-all" type="checkbox" /></th>
                    <th>اسم العرض</th>
                    <th>كود العرض</th>

                    <th> الخدمة</th>

                    <th>وقت الانشاء</th>
                    <th>العمليات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td>
                        <input type="checkbox" name="delete_select" value="{{$service->id}}" class="delete_select">


                    </td>
                    <td>الحمامات</td>
                    <td>01253</td>
                    <td> <span class="btn btn-success mg-t-5">حمام تركي</span><span class="btn btn-success mg-t-5">حمام
                            تركي</span>
                        <span class="btn btn-success mg-t-5">حمام مغربي</span><span class="btn btn-success mg-t-5">حمام
                            الملوك</span></td>
                    <td></td>
                    <td></td>
                </tr>
            </tbody>
        </table>
        <div class="card card-table-two">
            <div class="d-flex justify-content-between">
                <h4 class="card-title mb-1">الحمامات</h4> <i class="mdi mdi-dots-horizontal text-gray"></i>
            </div> <span class="tx-12 tx-muted mb-3 ">This is your most recent earnings for today's date.</span>
            <div class="table-responsive country-table">
                <table class="table table-striped table-bordered mb-0 text-sm-nowrap text-lg-nowrap text-xl-nowrap">
                    <thead>
                        <tr>
                            <th class="wd-lg-25p">*فردين</th>
                            <th class="wd-lg-25p tx-right">فرد</th>
                            <th class="wd-lg-25p tx-right">فبل</th>
                            <th class="wd-lg-25p tx-right">Tax Witheld</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>250</td>
                            <td class="tx-right tx-medium tx-inverse">34</td>
                            <td class="tx-right tx-medium tx-inverse">$658.20</td>
                            <td class="tx-right tx-medium tx-danger">>حمام تركي</td>
                        </tr>
                        <tr>
                            <td>150</td>
                            <td class="tx-right tx-medium tx-inverse">26</td>
                            <td class="tx-right tx-medium tx-inverse">$453.25</td>
                            <td class="tx-right tx-medium tx-danger">حمام تركي</td>
                        </tr>
                        <tr>
                            <td>350</td>
                            <td class="tx-right tx-medium tx-inverse">34</td>
                            <td class="tx-right tx-medium tx-inverse">$653.12</td>
                            <td class="tx-right tx-medium tx-danger">>حمام مغربي</td>
                        </tr>
                        <tr>
                            <td>450</td>
                            <td class="tx-right tx-medium tx-inverse">45</td>
                            <td class="tx-right tx-medium tx-inverse">$546.47</td>
                            <td class="tx-right tx-medium tx-danger">حمام مغربي</td>
                        </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<!--/div-->
</div>
<!-- /row -->
</div>
<!-- Container closed -->
</div>
<!-- main-content closed -->
@endsection
@section('js')
<!--Internal  Notify js -->
<script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
<script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.repeater/1.2.1/jquery.repeater.min.js"></script>
<SCRipt>
    ! function (e, t, r) {
        "use strict";
        r(".repeater-default").repeater(), r(".file-repeater, .contact-repeater").repeater({
            show: function () {
                r(this).slideDown()
            },
            hide: function (e) {
                confirm("Are you sure you want to remove this item?") && r(this).slideUp(e)
            }
        })
    }(window, document, jQuery);

</SCRipt>
<script>
    $(function () {
        jQuery("[name=select_all]").click(function (source) {
            checkboxes = jQuery("[name=delete_select]");
            for (var i in checkboxes) {
                checkboxes[i].checked = source.target.checked;
            }
        });
    })

</script>


<script type="text/javascript">
    $(function () {
        $("#btn_delete_all").click(function () {
            var selected = [];
            $("#example input[name=delete_select]:checked").each(function () {
                selected.push(this.value);
            });

            if (selected.length > 0) {
                $('#delete_select').modal('show')
                $('input[id="delete_select_id"]').val(selected);
            }
        });
    });

</script>



@endsection
