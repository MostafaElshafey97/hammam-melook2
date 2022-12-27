@extends('Dashboard.layouts.master')
@section('title')
   الخدمات
@stop
@section('css')
<link href="{{URL::asset('Dashboard/plugins/datatable/css/dataTables.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('Dashboard/plugins/datatable/css/buttons.bootstrap4.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Dashboard/plugins/datatable/css/responsive.bootstrap4.min.css')}}" rel="stylesheet" />
<link href="{{URL::asset('Dashboard/plugins/datatable/css/jquery.dataTables.min.css')}}" rel="stylesheet">
<link href="{{URL::asset('Dashboard/plugins/datatable/css/responsive.dataTables.min.css')}}" rel="stylesheet">

<link href="{{URL::asset('Dashboard/plugins/select2/css/select2.min.css')}}" rel="stylesheet">


    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    
    


@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الخدمات</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    عرض جميع الخدمات</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    @include('Dashboard.messages_alert')
    <!-- row opened -->
    <div class="row row-sm">
        
        <!--div-->
        <div class="col-xl-12">
            <div class="card mg-b-20">
                <div class="card-header pb-0">
                <form action="">
                            <div class="row">

                                <div class="col-md-4">
                                    <div class="form-group">
                                        <input type="text" name="search" autofocus class="form-control" placeholder="search" value="{{ request()->search }}">
                                    </div>
                                </div><!-- end of col -->

                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-success"><i class="fa fa-search"></i> Search</button>

                                </div>
                            </div><!-- end of row -->

                        </form>


                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                                           أضافة خدمة جديدة
</button>
        
                    <button type="button" class="btn btn-danger"
                            id="btn_delete_all">حذف الخدمات  المحددة</button>


                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table text-md-nowrap" id="example1">

                            <thead>
                            <tr>
                                <th>#</th>
                                <th><input name="select_all"  id="example-select-all"  type="checkbox"/></th>
                                <th>اسم الخدمة</th>
                                <th>كود الخدمة</th>
                                <th>فئة الخدمة</th>
                                <th>سعر الخدمة</th>
                                <th>سعر الخصم</th>
                                <th> وقت الخدمة</th>
                                <th> العمولة</th>
                                <th>التفعيل</th>
                                <th>وقت الانشاء</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                                <tr @if($loop->first) class="bg-secondary" @endif>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <input type="checkbox" name="delete_select" value="{{$service->id}}" class="delete_select">


                                    </td>
                                    <td>{{ $service->name }}</td>
                                    <td>{{ $service->code }}</td>
                                    <td>{{ $service->service_category->name}}</td>

                                    <td>{{ $service->price }} جنيه</td>
                                    <td>{{ $service->offer_price }} جنيه</td>
                                    <td>{{ $service->service_time }} دقيقة</td>


                                    <td>{{ $service->commission_rate}}</td>




                                 
                                 

                                    <td><input type="checkbox" data-id="{{ $service->id }}" name="status" class="js-switch" {{ $service->status == 1 ? 'checked' : '' }}></td>

                                    <td>{{ $service->created_at ? : '' }}</td>
                                    <td>
                                                       <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"  data-toggle="modal" href="#edit{{$service->id}}"><i class="las la-pen"></i></a>
                                                       <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#delete{{$service->id}}"><i class="las la-trash"></i></a>
                                                   </td>
                      
                                </tr>
                                @include('Dashboard.Services.delete')
                                @include('Dashboard.Services.edit')


                                @include('Dashboard.Services.delete_select')
                               
                            @endforeach
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

    @include('Dashboard.services.add')

    </div>





    <!-- main-content closed -->
@endsection
@section('js')

<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

<script>
        $(function() {
            jQuery("[name=select_all]").click(function(source) {
                checkboxes = jQuery("[name=delete_select]");
                for(var i in checkboxes){
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

<!-- Internal Data tables -->
<script src="{{URL::asset('Dashboard/plugins/datatable/js/jquery.dataTables.min.js')}}"></script>

<!--Internal  Datatable js -->
<script src="{{URL::asset('Dashboard/js/table-data.js')}}"></script>
    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>


    <script src="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.js"></script>

    
    
    
    <script>
            let elems = Array.prototype.slice.call(document.querySelectorAll('.js-switch'));
             elems.forEach(function(html) {
            let switchery = new Switchery(html,  { size: 'small' });
        });

        



        $(document).ready(function(){
    $('.js-switch').change(function () {
        let status = $(this).prop('checked') === true ? 1 : 0;
        let serviceId = $(this).data('id');
        $.ajax({
            type: "get",
            dataType: "json",
            url: '{{ route('update_status') }}',
            data: {'status': status, 'service_id': serviceId },
            success: function (data) {
                    toastr.options.closeButton = true;
                    toastr.options.closeMethod = 'fadeOut';
                    toastr.options.closeDuration = 100;
                    toastr.success(data.message);
                }
            
        });
    });
});

   </script>








@endsection
