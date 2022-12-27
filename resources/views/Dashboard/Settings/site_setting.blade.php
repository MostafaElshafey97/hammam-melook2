@extends('Dashboard.layouts.master')
@section('css')
    <!--Internal Sumoselect css-->
    <link rel="stylesheet" href="{{ URL::asset('Dashboard/plugins/sumoselect/sumoselect-rtl.css') }}">
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>

    <!-- Internal Select2 css -->
    <link href="{{URL::asset('Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">
    <!--Internal  Datetimepicker-slider css -->
    <link href="{{URL::asset('Dashboard/plugins/amazeui-datetimepicker/css/amazeui.datetimepicker.css')}}"
          rel="stylesheet">
    <link href="{{URL::asset('Dashboard/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.css')}}"
          rel="stylesheet">
    <link href="{{URL::asset('Dashboard/plugins/pickerjs/picker.min.css')}}" rel="stylesheet">
    <!-- Internal Spectrum-colorpicker css -->
    <link href="{{URL::asset('Dashboard/plugins/spectrum-colorpicker/spectrum.css')}}" rel="stylesheet">

@section('title')
تعديل اعدادات الموقع@stop
@endsection
@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto"> الاعدادات</h4><span
                    class="text-muted mt-1 tx-13 mr-2 mb-0">/
               تعديل الاعدادات</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')

    @include('Dashboard.messages_alert')

    <!-- row -->
    <div class="row">
        <div class="col-lg-12 col-md-12">
            <div class="card">
                <div class="card-body">
                    <form action="{{ route('update.sitesetting')}}" method="post" autocomplete="off"
                          enctype="multipart/form-data">
                          @csrf
    @method('PUT')
                        <input type="hidden" name="id" value="{{ $setting->id }}"> 

                        <div class="pd-30 pd-sm-40 bg-gray-200">
                          

                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label for="exampleInputEmail1">
                                        اسم الموقع</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <input class="form-control" name="name" value="{{ $setting->name }}" type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label for="exampleInputEmail1">
                                        عنوان المنصورة</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <input class="form-control" name="address1" value="{{ $setting->address1 }}" type="text">
                                </div>
                            </div>

                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label for="exampleInputEmail1">
                                        ايميل المنصورة</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <input class="form-control" value="{{ $setting->email1 }}" name="email1" type="email">
                                </div>
                            </div>
           


                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label for="exampleInputEmail1">
                                       1 الهاتف</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <input class="form-control" value="{{ $setting->phone_one }}" name="phone_one" type="tel">
                                    <input class="form-control" value="" name="id" type="hidden">
                                </div>
                            </div>
                            
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label for="exampleInputEmail1">
                                        الهاتف2</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <input class="form-control" value="{{ $setting->phone_two }}" name="phone_two" type="tel">
                                    <input class="form-control" value="" name="id" type="hidden">
                                </div>
                            </div>
                        
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label for="exampleInputEmail1">
                                        عنوان الزقازيق</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <input class="form-control" value="{{ $setting->address2 }}" name="address2" type="tel">
                                    <input class="form-control" value="" name="id" type="hidden">
                                </div>
                            </div>

                            
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label for="exampleInputEmail1">
                                        ايميل الزقازيق</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <input class="form-control" value="{{ $setting->email2 }}" name="email2" type="email">
                                </div>
                            </div>

                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label for="exampleInputEmail1">
                                        هاتف1 الزقازيق</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <input class="form-control" value="{{ $setting->phone_three }}" name="phone_three" type="tell">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label for="exampleInputEmail1">
                                        هاتف2 الزقازيق</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <input class="form-control" value="{{ $setting->phone_four }}" name="phone_four" type="tell">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label for="exampleInputEmail1">
                                         رابط الفيسبوك</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <input class="form-control" value="{{ $setting->facebook }}" name="facebook" type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label for="exampleInputEmail1">
                                         رابط اليوتيوب</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <input class="form-control" value="{{ $setting->youtube}}" name="youtube" type="text">
                                </div>
                            </div>
                            <div class="row row-xs align-items-center mg-b-20">
                                <div class="col-md-1">
                                    <label for="exampleInputEmail1">
                                         رابط انستجرام</label>
                                </div>
                                <div class="col-md-11 mg-t-5 mg-md-t-0">
                                    <input class="form-control" value="{{ $setting->instagram }}" name="instagram" type="text">
                                </div>
                            </div>
                       
                            


                            </div>

                         

                         

                       


                            <button type="submit"
                                    class="btn btn-main-primary pd-x-30 mg-r-5 mg-t-5">تعديل</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /row -->
    </div>
    <!-- Container closed -->
    </div>
    <!-- main-content closed -->
@endsection
@section('js')

  

    <!--Internal  Form-elements js-->
    <script src="{{ URL::asset('Dashboard/js/select2.js') }}"></script>
    <script src="{{ URL::asset('Dashboard/js/advanced-form-elements.js') }}"></script>

    <!--Internal Sumoselect js-->
    <script src="{{ URL::asset('Dashboard/plugins/sumoselect/jquery.sumoselect.js') }}"></script>
    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>


    <!--Internal  Datepicker js -->
    <script src="{{URL::asset('dashboard/plugins/jquery-ui/ui/widgets/datepicker.js')}}"></script>
    <!--Internal  jquery.maskedinput js -->
    <script src="{{URL::asset('dashboard/plugins/jquery.maskedinput/jquery.maskedinput.js')}}"></script>
    <!--Internal  spectrum-colorpicker js -->
    <script src="{{URL::asset('dashboard/plugins/spectrum-colorpicker/spectrum.js')}}"></script>
    <!-- Internal Select2.min js -->
    <script src="{{URL::asset('dashboard/plugins/select2/js/select2.min.js')}}"></script>
    <!--Internal Ion.rangeSlider.min js -->
    <script src="{{URL::asset('dashboard/plugins/ion-rangeslider/js/ion.rangeSlider.min.js')}}"></script>
    <!--Internal  jquery-simple-datetimepicker js -->
    <script src="{{URL::asset('dashboard/plugins/amazeui-datetimepicker/js/amazeui.datetimepicker.min.js')}}"></script>
    <!-- Ionicons js -->
    <script src="{{URL::asset('dashboard/plugins/jquery-simple-datetimepicker/jquery.simple-dtpicker.js')}}"></script>
    <!--Internal  pickerjs js -->
    <script src="{{URL::asset('dashboard/plugins/pickerjs/picker.min.js')}}"></script>
    <!-- Internal form-elements js -->
    <script src="{{URL::asset('dashboard/js/form-elements.js')}}"></script>


@endsection
