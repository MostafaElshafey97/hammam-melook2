@extends('Dashboard.layouts.master')
@section('title')
العملاء
@stop
@section('css')
<link href="{{URL::asset('Dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('Dashboard/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Dashboard/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('Dashboard/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Dashboard/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
@endsection
@section('page-header')
<!-- breadcrumb -->
<br><br><br>
<div class="main-container container-fluid">
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">


    </div> <!-- breadcrumb -->
    <!-- row -->
    <div class="row row-sm">
        <div class="col-sm-12 col-lg-5 col-xl-4">
            <div class="card custom-card">
                <div class="">
                    <div class="main-content-contacts pt-0">
                        <div class="main-content-left main-content-left-contacts">
                            <nav class="nav main-nav-line main-nav-line-chat  ps-3"> </nav>
                            <div class="main-contacts-list ps ps--active-y" id="mainContactList">


                                <div class="panel-group" id="accordion1">




                                    <a data-toggle="collapse" class="btn ripple btn-primary mb-3 mb-xl-0 collapsed "
                                        data-parent="#accordion1" href="#collapseThree"> الخدمة
                                    </a>
                                    <a data-toggle="collapse" data-parent="#accordion3"
                                        class="btn ripple btn-primary mb-3 mb-xl-0 collapsed" href="#collapsefor">
                                        المنتج
                                    </a>
                                    <a data-toggle="collapse" data-parent="#accordion3"
                                        class="btn ripple btn-primary mb-3 mb-xl-0 collapsed" href="#collapseff"> باقة
                                    </a>
                                    <a data-toggle="collapse" data-parent="#accordion4"
                                        class="btn ripple btn-primary mb-3 mb-xl-0 collapsed" href="#collapsefive"> عروض
                                    </a>
                                    <div id="collapseThree" class="panel-collapse collapse ">
                                        <div class="panel-body">

                                            <div class="panel-group " id="accordion2">
                                                @foreach(App\Models\ServiceCategory::all() as $serivces)


                                                <a data-toggle="collapse"
                                                    class="btn btn-secondary" 
                                                    data-parent="#accordion2" href="#collapse{{$serivces->id}}">
                                                    {{$serivces->name}}

                                                </a>


                                                <div id="collapse{{$serivces->id}}" class="panel-collapse collapse">
                                                    @foreach(App\Models\Service::select('name','id','price','service_time')->where('service_category_id',
                                                    $serivces->id)->get() as $souslistes)
                                                    <a class="btn ripple btn-info mb-3 mb-xl-0 collapsed"
                                                        onClick='handleDropDown({{$souslistes->id}})'>
                                                        <li
                                                            class="list-group-item d-flex justify-content-between align-items-start">
                                                            <div class="ms-2 me-auto">
                                                                <div class="fw-bold">{{$souslistes->name}}</div>
                                                            </div>
                                                            <span
                                                                class="badge bg-primary rounded-pill">{{$souslistes->price}}
                                                                ج.م</span>


                                                        </li>


                                                        <br>
                                                    </a>
                                                    @endforeach
                                                </div>

                                                @endforeach
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="panel-group" id="accordion3">





                                    <div id="collapsefor" class="panel-collapse collapse">
                                        <div class="panel-body">

                                            <div class="panel-group" id="accordion4">
                                                @foreach(App\Models\ProductCategory::all() as $ProductCategory)


                                                <a data-toggle="collapse"
                                                    class="btn ripple btn-primary mb-3 mb-xl-0 collapsed"
                                                    data-parent="#accordion4" href="#collapse{{$ProductCategory->id}}">
                                                    {{$ProductCategory->name}}--{{$ProductCategory->id}}
                                                </a>


                                                <div id="collapse{{$ProductCategory->id}}"
                                                    class="panel-collapse collapse">
                                                    @foreach(App\Models\Product::select('name','id')->where('id',
                                                    $ProductCategory->id)->get() as $Product)
                                                    <div class="panel-body"> <button
                                                            onClick='handleDropDownproduct("prod"+{{$Product->id}})'>{{$Product->name}}
                                                        </button></div>
                                                    @endforeach
                                                </div>

                                                @endforeach
                                            </div>


                                        </div>
                                    </div>

                                </div>
                                <div class="collapse  " id="collapseExampleddd">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                                            <div class="card bg-danger-gradient text-white">
                                                <div class="card-body">
                                                    <div class="row">

                                                        <div class="">
                                                            <span class="text-white"> البطاقه الذهبيه </span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse  " id="collapseExampledd">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                                            <div class="card bg-danger-gradient text-white">
                                                <div class="card-body">
                                                    <div class="row">

                                                        <div class="">
                                                            <span class="text-white"> باقة لا يوجد </span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="collapse  " id="collapseExample1">
                                    <div class="row">
                                        <div class="col-lg-6 col-xl-3 col-md-6 col-12">
                                            <div class="card bg-danger-gradient text-white">
                                                <div class="card-body">
                                                    <div class="row">

                                                        <div class="">
                                                            <span class="text-white"> عنايه بالشعر </span>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-lg-7 col-xl-8">
            <form action="{{route('save_invoice')}}" method="POST">
                @csrf <div class=""> <a class="main-header-arrow" href="" id="ChatBodyHide"><i
                            class="icon ion-md-arrow-back"></i></a>
                    <div class="main-content-body main-content-body-contacts card custom-card">
                        <div class="main-contact-info-header pt-3">
                            <div class="media">

                                <div class="media-body">

                                    <div class="col-lg-12 col-md-12">
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="main-content-label mg-b-5"> بحت عميل </div>

                                                <select class="select2-selection__rendered" name="client_name"
                                                    id="country" required>


                                                    <option name="client_name" selected>البحث عن عملاء</option>
                                                    @foreach(App\Models\client::all() as $client)
                                                    <option value="{{$client->id}}"> {{$client->name}} <br>
                                                        {{$client->phone}}
                                                    </option>

                                                    @endforeach
                                                    <option value=""> <a class="btn btn-main-primary"
                                                            data-bs-target="#modaldemo1" data-bs-toggle="modal"
                                                            href="">جديد عميل أضافة</a> </option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>


                                </div>
                            </div>

                        </div>

                    </div>
                </div>
                <div>
                    <div class="card custom-card">
                        <div class="card-header">Recent Contacts</div>
                        <div class="card-body">


                            <div class="col-xl-12">


                                @foreach(App\Models\Service::select('name','id','price')->get() as $souslistes)
                                <div class="ddd " style="display: none; border-radius: 10px;" id="{{$souslistes->id}}">
                                    <div class="form-inline" id="hhh" style=" border-radius: 10px;">

                                        <input type="text" class="form-control" name="nameServices[]"
                                            style="font-weight: bold;" value=" {{$souslistes->name}}" readonly disabled>
                                        <input type="text" class="form-control" name="price[]"
                                            style="font-weight: bold;" value=" {{$souslistes->price}} دولار " readonly
                                            disabled>
                                        <input type="text" class="form-control" style="font-weight: bold;"
                                            value="  الكمية  :1 " readonly disabled>
                                        <br><br>
                                        <select class="form-control" name="kabten" aria-label="Default select example"
                                            disabled>
                                            <option value="" selected> اختر كابتن</option>
                                            @foreach(App\Models\Employee::where('job','=','كابتن')->get() as $empl)

                                            <option value="{{$empl->name}}">{{$empl->name}}</option>
                                            @endforeach
                                        </select>
                                        <select name="Amil" class="form-control" disabled>
                                            <option value="" selected> العميل </option>
                                            @foreach(App\Models\Employee::where('job','=','العم')->get() as $empl)

                                            <option value="{{$empl->name}}">{{$empl->name}}</option>
                                            @endforeach

                                        </select>

                                        <hr style=" border-top: 1px dashed red;">

                                        <br> <br> <br> <br> <br> <br> <br>
                                        <a href="#" onclick="changeStyle({{$souslistes->id}});return false">الغاء</a>
                                        <hr style=" border-top: 1px dashed red;">
                                    </div>

                                </div>

                                @endforeach
                                </br></br></br>
                                @include('Dashboard.Clients.product')

                                <div id="foot" style="display:none">
                                   
                                    <span>
                                        <p style="font-weight: bold;"> الإجمالي :
                                        </p>
                                    </span>

                                    <input type="text" name="paid" id="totale" readonly>

                                    <br>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <span> المدفوع </span>
                                            <input type="text" name="paid" id="paid" onblur="calculreste()">
                                        </div>
                                        <div class="col-lg-3">
                                            <span> المتبقي </span>
                                            <input type="text" name="remane_paiment" id="remane_paiment">
                                        </div>
                                    </div>
                                    <br>
                                    <div class="row">
                                        <div class="col-lg-3">
                                            <label class="">

                                                <span> وسيلة الدفع</span></label> </div>
                                        <div class="col-lg-3">
                                            <label class="ckbox">
                                                <input type="checkbox" value="نقدي" name="paiment_type">
                                                <span> نقدي</span></label>
                                        </div>

                                        <div class="col-lg-3 mg-t-20 mg-lg-t-0">
                                            <label class="ckbox">
                                                <input checked="" name="paiment_type" value="كارت"
                                                    type="checkbox"><span>
                                                    كارت</span>
                                            </label>
                                        </div>
                                        <div class="col-lg-3 mg-t-20 mg-lg-t-0"> <label class="ckbox">
                                                <input disabled="" type="checkbox" name="paiment_type"
                                                    value="فيزا"><span>
                                                    فيزا</span></label> </div>
                                    </div>
                                    <br><br><br>
                                    <div class="col-lg-3">
                                    </div>


                                    <a href="javascript:void(0);" class="btn btn-success float-end mt-3"> <i
                                            class="mdi mdi-telegram me-1"></i> تنفيذ </a>
                                    <a class="btn btn-purple float-end mt-3 ms-2" href="{{route('clients.print')}}"
                                        target="_blank"> <i class="mdi mdi-currency-usd me-1"></i> طباعة </a>


                                    <button type="submit" id="button" name="submit" id="button" value="reservation"
                                        class="btn btn-primary">حجز حجز</button>
                                    <button type="submit" id="button" name="submit" id="button"
                                        value="tanfid">تنفيذ</button>
                                </div>
            </form>



        </div>
    </div>
</div>
</div>
</div> <!-- End Row -->
</div>
<!-- row opened -->
<div class="row row-sm">

    <!--div-->
    <div class="col-xl-12">
        <div class="row">
            <div class="col-5 border border-secondary">



                <div class="collapse     " id="collapseExample">

                    <br> <br>

                </div>






            </div>
            <div class="col-7 border border-secondary">




                <link rel="stylesheet" type="text/css"
                    href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
                <style>
                    #hhh {
                        border: 2px solid red;
                        padding: 10px;
                        border-radius: 25px;
                    }

                    #example2 {
                        border: 2px solid red;
                        padding: 10px;
                        border-radius: 50px 20px;
                    }

                </style>



            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <script>
        $(function () {
            $('#addMore').on('click', function () {
                var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
                data.find("input").val('');
            });
            $(document).on('click', '.remove', function () {
                var trIndex = $(this).closest("tr").index();
                if (trIndex > 1) {
                    $(this).closest("tr").remove();
                } else {
                    alert("Sorry!! Can't remove first row!");
                }
            });
        });

    </script>
    <script>
        function handleDropDown(elementId) {
            console.log(111, elementId) //1
            const element = document.getElementById(elementId);
            var tags = element.querySelectorAll("input, select, checkbox, textarea");

            for (var x = 0; x < tags.length; x++) {
                //console.log(142,tags[x]) ;
                tags[x].removeAttribute('disabled');;
                // console.log(152,tags[x]) ;
            }
            const totale = document.getElementById("totale");
            var somme = 0;
            const prices = document.getElementsByName("price[]");
            for (var x = 0; x < prices.length; x++) {
                if (prices[x].disabled == false)
                    somme += parseInt(prices[x].value);
                // prices[x].removeAttribute('disabled');;
                // console.log(152,prices[x]) ;

            }
            totale.value = somme + " دولار";
            //calclule reste paiment

            const foot = document.getElementById('foot');
            element.innerHtml = "fffffffffff";
            console.log(22, element)

            element.style.display = "block";

            if (foot.style.display === "none") {
                foot.style.display = "block";
            }

        }

        function calculreste() {
            const paid = parseInt(document.getElementById('paid').value);
            const totale = parseInt(document.getElementById('totale').value);
            document.getElementById('remane_paiment').value = totale - paid;
        }

    </script>


    <script>
        function changeStyle(id) {
            var element = document.getElementById(id);
            element.style.display = "none";
        }

    </script>
    </script>



    <script>
        function handleDropDown2(elementId) {
            const element = document.getElementById('languages2');

            if (element.style.display === "block") {
                element.style.display = "none";
            } else {
                element.style.display = "block";
            }
        }

    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function () {
            $("#filter").keyup(function () {

                // Retrieve the input field text and reset the count to zero
                var filter = $(this).val(),
                    count = 0;

                // Loop through the comment list
                $("nav ul li").each(function () {

                    // If the list item does not contain the text phrase fade it out
                    if ($(this).text().search(new RegExp(filter, "i")) < 0) {
                        $(this).fadeOut();

                        // Show the list item if the phrase matches and increase the count by 1
                    } else {
                        $(this).show();
                        count++;
                    }
                });

                // Update the count
                var numberItems = count;
                $("#filter-count").text("عميل غير موجود = " + count);
            });
        });

    </script>
    @include('Dashboard.Clients.add')
</div>
<!-- main-content closed -->
@endsection
@section('js')
