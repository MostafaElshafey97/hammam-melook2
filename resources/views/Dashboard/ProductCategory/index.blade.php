@extends('Dashboard.layouts.master')
@section('title')
فئات المنتجات@stop
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
							<h4 class="content-title mb-0 my-auto">فئات المنتجات</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/ {{trans('Dashboard/main-sidebar_trans.view_all')}}</span>
						</div>
					</div>
				</div>
				<!-- breadcrumb -->
@endsection
@section('content')
@include('Dashboard.messages_alert')
				<!-- row -->
                    <!-- row opened -->
                    <div class="row row-sm">
                        <div class="col-xl-12">
                            <div class="card">
                                <div class="card-header pb-0">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add">
                                            اضافة فئة منتج
                                        </button>

                                        <a href="{{route('products.index')}}" class="btn btn-success" role="button"
   aria-pressed="true">المنتجات </a>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table text-md-nowrap" id="example2">
                                            <thead>
                                            <tr>
                                                <th class="wd-15p border-bottom-0">#</th>
                                                <th class="wd-15p border-bottom-0">اسم الفئة</th>
                                                <th class="wd-15p border-bottom-0"> وصف الفئة</th>
                                                <th class="wd-15p border-bottom-0">  التفعيل</th>
                                                <th class="wd-20p border-bottom-0"> تاريخ الانشاء</th>
                                                <th class="wd-20p border-bottom-0">  العمليات</th>



                                            </tr>
                                            </thead>
                                            <tbody>
                                           @foreach($product_categories as $product_category)
                                               <tr>
                                                   <td>{{$loop->iteration}}</td>
                                                   <td>{{$product_category->name}} </td>
                                                   <td>{{ \Str::limit($product_category->descreption, 100) }}</td>
                                                   
                                                   <td><input type="checkbox" data-id="{{ $product_category->id }}" name="status" class="js-switch" {{ $product_category->status == 1 ? 'checked' : '' }}></td>





                                                   <td>{{ $product_category->created_at->diffForHumans() }}</td>
                                                   <td>
                                                       <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"  data-toggle="modal" href="#edit{{$product_category->id}}"><i class="las la-pen"></i></a>
                                                       <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#delete{{$product_category->id}}"><i class="las la-trash"></i></a>
                                                   </td>
                                               </tr>

                                               @include('Dashboard.ProductCategory.edit')
                                               @include('Dashboard.ProductCategory.delete')

                                           @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div><!-- bd -->
                            </div><!-- bd -->
                        </div>
                        <!--/div-->

                    @include('Dashboard.ProductCategory.add')
                    <!-- /row -->

				</div>
				<!-- row closed -->

			<!-- Container closed -->

		<!-- main-content closed -->
@endsection
@section('js')
<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>


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
        let product_categoryId = $(this).data('id');
        $.ajax({
            type: "get",
            dataType: "json",
            url: '{{ route('category_status') }}',
            data: {'status': status, 'product_category_id': product_categoryId },
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
