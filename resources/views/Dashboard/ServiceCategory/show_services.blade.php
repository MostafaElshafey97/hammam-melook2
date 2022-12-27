@extends('Dashboard.layouts.master')
@section('css')


@endsection

@section('title')
    {{$service_categories->name}} / خدمات الفئة
@stop

@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
            <h4 class="content-title mb-0 my-auto">{{$service_categories->name}}</h4><span class="text-muted mt-1 tx-13 mr-2 mb-0">/خدمات الفئة</span>
            </div>
        </div>
    </div>
    <!-- breadcrumb -->
@endsection
@section('content')
    <!-- row opened -->
    <div class="row row-sm">
        <!--div-->
        <div class="col-xl-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-striped mg-b-0 text-md-nowrap table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>اسم الخدمة</th>
                                <th>كود الخدنة</th>
                                <th>فئة الخدمة</th>
                                <th>سعر الخدمة</th>
                                <th>سعر الخصم</th>
                                <th> وقت الخدمة</th>
                                <th> العمولة</th>

                                <th>الحالة</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($services as $service)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{$service->name}}</td>
                                <td>{{ $service->code }}</td>
                                <td>{{ $service->service_category->name}}</td>
                                <td>{{ $service->price}}</td>
                                <td>{{ $service->offer_price}}</td>
                                <td>{{ $service->service_time}}</td>
                                <td>{{ $service->commission_rate}}</td>

                              
                                <td>
                                    <div
                                        class="dot-label bg-{{$service->status == 1 ? 'success':'danger'}} ml-1"></div>
                                    {{$service->status == 1 ? ('مفعل'):('غير مفعل')}}
                                </td>

                                <td>
               حجز
                                </td>
                            </tr>
                            @include('Dashboard.Services.delete')
                            @include('Dashboard.Services.delete_select')
                            @include('Dashboard.Services.update_status')
                            @endforeach
                            </tbody>
                        </table>
                    </div><!-- bd -->
                </div><!-- bd -->
            </div><!-- bd -->
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
@endsection
