@extends('Dashboard.layouts.master')

@section('css')
    <link href="{{URL::asset('dashboard/plugins/notify/css/notifIt.css')}}" rel="stylesheet"/>
@endsection


@section('page-header')
    <!-- breadcrumb -->
    <div class="breadcrumb-header justify-content-between">
        <div class="my-auto">
            <div class="d-flex">
                <h4 class="content-title mb-0 my-auto">الحجوزات</h4>
                <span class="text-muted mt-1 tx-13 mr-2 mb-0">/
                    عرض جميع الحجوزات</span>
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
            <div class="card mg-b-20">
                <div class="card-header pb-0">

                    <a href="{{route('Employees.create')}}" class="btn btn-primary" role="button"
                       aria-pressed="true">اضافة الحجوزات جديد</a>
                    <button type="button" class="btn btn-danger"
                            id="btn_delete_all">حذف الحجوزات المحددين</button>

                </div><br><br><br><div _ngcontent-klr-c226="" class="row px-2"><div _ngcontent-klr-c226="" class="col-md-3 col-sm-12 col-12 px-2"><app-search _ngcontent-klr-c226="" _nghost-klr-c162="" class="ng-star-inserted"><form _ngcontent-klr-c162="" novalidate="" class="ng-pristine ng-valid ng-touched"><div _ngcontent-klr-c162="" class="input-group"><input _ngcontent-klr-c162="" type="text" name="freeText" class="form-control search-input ng-pristine ng-valid ng-touched" placeholder="بحث"><button _ngcontent-klr-c162="" type="button" class="btn search-btn input-group-append"><i _ngcontent-klr-c162="" class="fas fa-times text-grey"></i></button><button _ngcontent-klr-c162="" class="btn search-btn input-group-append"><i _ngcontent-klr-c162="" class="fas fa-search text-grey"></i></button></div></form></app-search><!----></div><div _ngcontent-klr-c226="" class="col-md-3 col-sm-4 px-2"><ng-select _ngcontent-klr-c226="" role="listbox" bindlabel="BranchGlobalName" bindvalue="BranchId" title="" class="ng-select ng-select-multiple ng-select-searchable ng-select-clearable ng-untouched ng-pristine ng-valid"><div class="ng-select-container ng-has-value"><div class="ng-value-container"><div class="ng-placeholder">فروع المستخدم الحالي</div><div class="ng-value ng-star-inserted"><!----><span aria-hidden="true" class="ng-value-icon left ng-star-inserted">×</span><span class="ng-value-label ng-star-inserted">حمام الملوك</span><!----></div><!----><!----><!----><!----><div class="ng-input"><input role="combobox" type="text" autocorrect="off" autocapitalize="off" autocomplete="a3496035ec26" aria-expanded="false"></div></div><!----><span class="ng-clear-wrapper ng-star-inserted" title="Clear all"><span aria-hidden="true" class="ng-clear">×</span></span><!----><span class="ng-arrow-wrapper"><span class="ng-arrow"></span></span></div><!----></ng-select></div><div _ngcontent-klr-c226="" class="col-md-2 col-sm-4 px-2"><label _ngcontent-klr-c226="" style="padding: 10px;"> كل الفروع <input _ngcontent-klr-c226="" type="checkbox" name="AllBranches" style="margin-right: 5px;" class="ng-untouched ng-pristine ng-valid"></label></div><div _ngcontent-klr-c226="" class="col-md-2 col-sm-6 col-6 px-2"><div _ngcontent-klr-c226="" class="input-group ng-star-inserted"><input _ngcontent-klr-c226="" type="date" name="date" class="form-control ng-untouched ng-pristine ng-valid"></div><!----></div><div _ngcontent-klr-c226="" class="col-md-2 col-sm-6 col-6 px-2"><div _ngcontent-klr-c226="" class="input-group ng-star-inserted"><input _ngcontent-klr-c226="" type="date" name="date" class="form-control ng-untouched ng-pristine ng-valid"></div><!----></div><div _ngcontent-klr-c226="" class="col-md-3 col-sm-6 px-2"><div _ngcontent-klr-c226=""><ng-select _ngcontent-klr-c226="" role="listbox" bindlabel="GlobalName" bindvalue="Id" class="ng-select ng-select-multiple ng-select-searchable ng-select-clearable ng-untouched ng-pristine ng-valid"><div class="ng-select-container"><div class="ng-value-container"><div class="ng-placeholder">كل طرق الدفع لفروع المستخدم</div><!----><!----><div class="ng-input"><input role="combobox" type="text" autocorrect="off" autocapitalize="off" autocomplete="a3c180e64742" aria-expanded="false"></div></div><!----><!----><span class="ng-arrow-wrapper"><span class="ng-arrow"></span></span></div><!----></ng-select></div></div><div _ngcontent-klr-c226="" class="col-md-2 col-sm-6 col-6 px-2"><div _ngcontent-klr-c226="" class="input-group"><select _ngcontent-klr-c226="" class="form-control"><option _ngcontent-klr-c226="" value="" disabled="" selected="">  حالة الحجز </option><option _ngcontent-klr-c226="" value="null">الكل</option><option _ngcontent-klr-c226="" value="0">غير مؤكد</option><option _ngcontent-klr-c226="" value="1">مؤكد</option><option _ngcontent-klr-c226="" value="2">وصل</option><option _ngcontent-klr-c226="" value="3">اكتملت</option><option _ngcontent-klr-c226="" value="4">اكتمل الاستطلاع</option><option _ngcontent-klr-c226="" value="5">noshow</option><option _ngcontent-klr-c226="" value="-1"> الحجوزات الملغية</option></select></div></div><div _ngcontent-klr-c226="" class="col-md-2 col-sm-6 col-6 px-2"><div _ngcontent-klr-c226="" class="input-group"><select _ngcontent-klr-c226="" class="form-control"><option _ngcontent-klr-c226="" value="" disabled="" selected=""> حالة الدفع </option><option _ngcontent-klr-c226="" vallue="null">الكل</option><option _ngcontent-klr-c226="" value="0">غير مدفوع</option><option _ngcontent-klr-c226="" value="2">غير مسددة بالكامل</option><option _ngcontent-klr-c226="" value="1">مدفوع</option></select></div></div><div _ngcontent-klr-c226="" class="col-md-3 col-sm-6 px-2"><div _ngcontent-klr-c226=""><ng-select _ngcontent-klr-c226="" role="listbox" bindlabel="GlobalName" bindvalue="Id" class="ng-select ng-select-multiple ng-select-searchable ng-select-clearable ng-pristine ng-valid ng-select-bottom ng-touched"><div class="ng-select-container"><div class="ng-value-container"><div class="ng-placeholder">أضيف بواسطة</div><!----><!----><div class="ng-input"><input role="combobox" type="text" autocorrect="off" autocapitalize="off" autocomplete="a876d16ab04e" aria-expanded="false"></div></div><!----><!----><span class="ng-arrow-wrapper"><span class="ng-arrow"></span></span></div><!----></ng-select></div></div><div _ngcontent-klr-c226="" class="col-md-2 col-sm-2 px-2"><button _ngcontent-klr-c226="" class="acceptClass"><i _ngcontent-klr-c226="" class="fas fa-check"></i> بحث </button></div></div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="table key-buttons text-md-nowrap">
                            <thead>
                            <tr style="background-color: black;">
                                <th>#</th>
                                <th><input name="select_all"  id="example-select-all"  type="checkbox"/></th>
                                <th style="color:aliceblue">رقم الحجز	</th>
                                <th style="color:aliceblue">العميل</th>
								 <th style="color:aliceblue">الخدمات	</th>
                                <th style="color:aliceblue">تاريخ الحجز	</th>
                                <th style="color:aliceblue">أضيف بواسطة	</th>
                                <th style="color:aliceblue"> قيمة الحجز	</th>
                                <th style="color:aliceblue"> حالة الحجز	</th>
                               
                                <th style="color:aliceblue">  طرق الدفع		</th>
								 <th style="color:aliceblue"> نسخ 	</th>
                               
                                <th>العمليات</th>
                            </tr>
                            </thead>
                            <tbody>
                        @foreach(App\Models\appointement_client::join('clients','clients.id','=','appointement_client.client_id')->get() as $appointement)
                                <tr><td></td><td></td>
                                    <td>{{$appointement->code_invoice}}</td>
                                    <td>{{$appointement->name}}</b>{{$appointement->phone}}</td>
									 <td>{{$appointement->name_Services}}</td>
                                    <td>{{$appointement->name}}</td>

                                    
                                    <td></td>
                                    <td>{{$appointement->paid}}</td>
                                    <td>{{$appointement->type_invoice}}</td>
 <td></td>
                                    <td><a href="{{url('print',$appointement->code_invoice)}}" target="_blank" class="btn btn-danger float-end mt-3 ms-2" > <i class="mdi mdi-printer me-1"></i>Print </a></td>
                                   
                                    <td>jj</td>
                                </tr>
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
