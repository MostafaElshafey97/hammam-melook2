@extends('Dashboard.layouts.master')
@section('title')
   الموظفون
@stop
@section('css')
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الموظفون</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    عرض جميع الموظفين</span>
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

                    <a href="{{route('Employees.create')}}" class="btn btn-primary" role="button"
                       aria-pressed="true">اضافة موظف جديد</a>
                    <button type="button" class="btn btn-danger"
                            id="btn_delete_all">حذف الموظفين المحددين</button>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th><input name="select_all"  id="example-select-all"  type="checkbox"/></th>
                                <th>الاسم</th>
                                <th>العنوان</th>
                                <th>الايميل</th>
                                <th>الفرع</th>
                                <th> موبايل</th>
                                <th>موبايل 2</th>
                                <th> الوظيفة</th>
                                <th> الراتب</th>
                                <th>التفعيل</th>
                                <th>وقت الانشاء</th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($employees as $employee)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <input type="checkbox" name="delete_select" value="{{$employee->id}}" class="delete_select">
                                    </td>
                                    <td>{{ $employee->name }}</td>
                                    <td>{{ $employee->address }}</td>
                                    <td>{{ $employee->email }}</td>
                                    <td>{{ $employee->section->name}}</td>

                                    <td>{{ $employee->phone }}</td>
                                    <td>{{ $employee->phone2}}</td>
                                    <td>{{ $employee->job }}</td>
                                    <td>{{ $employee->salary }}</td>




                                 
                                    <td>
                                        <div
                                            class="dot-label bg-{{$employee->status == 1 ? 'success':'danger'}} ml-1"></div>
                                        {{$employee->status == 1 ? ('مفعل'):('غير مفعل')}}
                                    </td>

                                    <td>{{ $employee->created_at->diffForHumans() }}</td>
                                    <td>

                                        <div class="dropdown">
                                            <button aria-expanded="false" aria-haspopup="true" class="btn ripple btn-outline-primary btn-sm" data-toggle="dropdown" type="button">عمليات الموظفين<i class="fas fa-caret-down mr-1"></i></button>
                                            <div class="dropdown-menu tx-13">
                                                <a class="dropdown-item" href="{{route('Employees.edit',$employee->id)}}"><i style="color: #0ba360" class="text-success ti-user"></i>&nbsp;&nbsp;تعديل البيانات</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#update_status{{$employee->id}}"><i   class="text-warning ti-back-right"></i>&nbsp;&nbsp;تغير الحالة</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete{{$employee->id}}"><i   class="text-danger  ti-trash"></i>&nbsp;&nbsp;حذف البيانات</a>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @include('Dashboard.Employees.delete')

                                @include('Dashboard.Employees.delete_select')
                                @include('Dashboard.Employees.update_status')
                               
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
    </div>
    <!-- main-content closed -->
@endsection
@section('js')
    <!--Internal  Notify js -->
    <script src="{{URL::asset('dashboard/plugins/notify/js/notifIt.js')}}"></script>
    <script src="{{URL::asset('/plugins/notify/js/notifit-custom.js')}}"></script>

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



@endsection
