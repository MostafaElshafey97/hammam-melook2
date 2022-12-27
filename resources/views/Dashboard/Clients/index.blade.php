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


    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/switchery/0.8.2/switchery.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

    
    


@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">العملاء</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    عرض جميع العملاء</span>
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


                        <p>
  <a class="btn btn-primary" data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">
اضافة عمبل  </a>
 
</p>
<div class="collapse" id="collapseExample">
  <div class="card card-body">
  <div>
  

  <input type='checkbox' data-toggle='collapse' data-target='#collapsediv1'> تنفيذ
  </input>
  <input type='checkbox' data-toggle='collapse' data-target='#collapsediv2'> حجز
  </input>
</div>
<div id='collapsediv1' class='collapse div1'>
  <div>
  <form action="{{ route('clients.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">
                <label for="exampleInputPassword1">كود العميل</label>
                    <input type="text" name="name" class="form-control" placeholder ="#2022-10-001" size="50" readonly>
                    <label for="exampleInputPassword1">اسم العميل</label>
                    <input type="text" name="name" class="form-control" size="50">

                                            <label for="Name"
                                                class="form-label">العنوان
                                                </label>
                                            <input class="form-control" type="text" name="address">
                    
              
                     <label for="exampleInputPassword1">  الهاتف</label>
                    <input type="text" name="phone" class="form-control"> 
                    <label for="exampleInputPassword1">  </label>
                    <div class="form-group" data-select2-id="13">
<label>الخدمات  ة</label>
<select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
<option data-select2-id="21">نوتياج</option>
<option data-select2-id="22">حمام مغربي	</option>
<option data-select2-id="23">حمام تركي	</option>


</select>
<span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="8" style="width: 100%;">
<span class="selection">
    <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
        <ul class="select2-selection__rendered">
            <li class="select2-selection__choice" title="Alaska" data-select2-id="33">
                <span class="select2-selection__choice__remove" role="presentation">×</span>نوتياج</li>
                <li class="select2-selection__choice" title="Delaware" data-select2-id="34">
                    <span class="select2-selection__choice__remove" role="presentation">×</span>   حمام مغربي  </li>
                    <li class="select2-selection__choice" title="Tennessee" data-select2-id="35">
                        <span class="select2-selection__choice__remove" role="presentation">×</span>  حمام تركي  </li>
                        <li class="select2-search select2-search--inline">
                            <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                        </ul>
                    </span>
                </span>
                <span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>

                                 </div>
                                 <div class="row">
                                 <div class="col-xs-6">
                                 <label for="Name"
                                                class="form-label">السعر الكلي
                                                </label>
                                            <input class="form-control" type="text" name="address">
                                            </div>
<div class="col-xs-6">
                                 <label for="Name"
                                                class="form-label">المسبق
                                                </label>
                                            <input class="form-control" type="text" name="address">
                                            </div>
                                            </div>
                <div class="modal-footer">
                <a href="javascript:void(0);" class="btn btn-danger float-end mt-3 ms-2" onclick="javascript:window.print();"> <i class="mdi mdi-printer me-1"></i>Print </a>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
  </div>

</div> 
<div id='collapsediv2' class='collapse div1'>
  <div>
  <form action="{{ route('clients.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">
                <label for="exampleInputPassword1">كود العميل</label>
                    <input type="text" name="name" class="form-control" placeholder ="#2022-10-001" size="50" readonly>
                    <div class="row">
<div class="col-xs-6">
                    <label for="exampleInputPassword1">اسم العميل</label>
                    <input type="text" name="name" class="form-control" size="50">
                    </div>
                    <div class="col-xs-6">
                    <label for="exampleInputPassword1">   رقم الكارت</label>
                    <input type="text" name="no_of_card" class="form-control">
                    </div>
                    </div>
                                            <label for="Name"
                                                class="form-label">العنوان
                                                </label>
                                            <input class="form-control" type="text" name="address">
                                            <div class="row">
<div class="col-xs-3">
<label for="exampleInputPassword1">  الهاتف</label>
<input type="text" class="form-control" placeholder="">
</div>
<div class="col-xs-3">
<label for="exampleInputPassword1">   الموبايل</label>
<input type="text" class="form-control" placeholder="">
</div>
<div class="col-xs-3">
<label for="exampleInputPassword1">  تاريخ الميلاد </label>
<input type="date" class="form-control" placeholder="">
</div>
<div class="col-xs-3">
<label for="exampleInputPassword1">  تاريخ الزواج</label>
<input type="date" class="form-control" placeholder="">
</div>
</div>
            
                  
                    <label for="exampleInputPassword1">   المهنة</label>
                    <input type="text" name="job" class="form-control">
                    <label for="exampleInputPassword1">  </label>
                    <div class="form-group" data-select2-id="13">
<label>الخدمات  ة</label>
<select class="form-control select2 select2-hidden-accessible" multiple="" data-placeholder="Select a State" style="width: 100%;" data-select2-id="7" tabindex="-1" aria-hidden="true">
<option data-select2-id="21">نوتياج</option>
<option data-select2-id="22">حمام مغربي	</option>
<option data-select2-id="23">حمام تركي	</option>


</select>
<span class="select2 select2-container select2-container--default select2-container--below" dir="ltr" data-select2-id="8" style="width: 100%;">
<span class="selection">
    <span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1">
        <ul class="select2-selection__rendered">
            <li class="select2-selection__choice" title="Alaska" data-select2-id="33">
                <span class="select2-selection__choice__remove" role="presentation">×</span>نوتياج</li>
                <li class="select2-selection__choice" title="Delaware" data-select2-id="34">
                    <span class="select2-selection__choice__remove" role="presentation">×</span>   حمام مغربي  </li>
                    <li class="select2-selection__choice" title="Tennessee" data-select2-id="35">
                        <span class="select2-selection__choice__remove" role="presentation">×</span>  حمام تركي  </li>
                        <li class="select2-search select2-search--inline">
                            <input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="" style="width: 0.75em;"></li>
                        </ul>
                    </span>
                </span>
                <span class="dropdown-wrapper" aria-hidden="true"></span></span>
</div>
                    <div class="row">
<div class="col-xs-6"> 
                   
                   
                    </div>
                                 </div>
                <div class="modal-footer">
                <button  value="Print Table" onclick="myApp.printTable()"class="btn btn-danger float-end mt-3 ms-2" onclick="javascript:window.print();"> <i class="mdi mdi-printer me-1"></i>Print </a>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
  </div>

</div>  </div>
</div>

                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th><input name="select_all"  id="example-select-all"  type="checkbox"/></th>
                                <th>اسم العميل</th>
                                <th> العنوان</th>
                                <th> الهاتف</th>
                                <th> الموبايل</th>
                                <th> تاريخ الميلاد</th>
                                <th>تاريخ الزواج</th>
                                <th> المهنة </th>
                                <th> رقم الكارت</th>
                                <th>التفعيل</th>
                                <th>تفاصيل العميل </th>
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($clients as $client)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <input type="checkbox" name="delete_select" value="{{$client->id}}" class="delete_select">


                                    </td>
                                    <td>{{ $client->name }}</td>
                                    <td>{{ $client->address }}</td>
                                    <td>{{ $client->phone}}</td>

                                    <td>{{ $client->phone2 }} </td>
                                    <td>{{ $client->dob }} </td>
                                    <td>{{ $client->dom }} </td>


                                    <td>{{ $client->job}}</td>
                                    <td>{{ $client->no_of_card}}</td>





                                 
                                 

                                    <td><input type="checkbox" data-id="{{ $client->id }}" name="status" class="js-switch" {{ $client->status == 1 ? 'checked' : '' }}></td>

                                    <td><span class="btn btn-success">   <a href="{{ route('clients.show', $client->code) }}"> click</a></span> </td>
                                    <td>
                                                       <a class="modal-effect btn btn-sm btn-info" data-effect="effect-scale"  data-toggle="modal" href="#edit{{$client->id}}"><i class="las la-pen"></i></a>
                                                       <a class="modal-effect btn btn-sm btn-danger" data-effect="effect-scale"  data-toggle="modal" href="#delete{{$client->id}}"><i class="las la-trash"></i></a>
                                                   </td>
                      
                                </tr>
                                @include('Dashboard.Clients.delete')
                                @include('Dashboard.Clients.edit')


                                @include('Dashboard.Clients.delete_select')
                               
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

    @include('Dashboard.Clients.add')

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
        let clientId = $(this).data('id');
        $.ajax({
            type: "get",
            dataType: "json",
            url: '{{ route('client_status') }}',
            data: {'status': status, 'client_id': clientId },
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


<script>
    let myApp = new function () {
        this.printTable = function () {
            let tab = document.getElementById('tab');
            let win = window.open('', '', 'height=700,width=700');
            win.document.write(tab.outerHTML);
            win.document.close();
            win.print();
        }
    }
</script>



@endsection
