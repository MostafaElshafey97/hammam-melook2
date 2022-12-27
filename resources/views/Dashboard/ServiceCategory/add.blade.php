<!-- Modal -->
<div class="modal show" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <form action="{{ route('serviceCategory.store') }}" method="post" autocomplete="off">
                @csrf
   <div class="modal-dialog modal-lg" role="document">
   <div class="modal-content modal-content-demo">
   <div class="modal-header"> <h6 class="modal-title" style="">فئات الخدمات </h6>
   <button aria-label="Close" class="close" data-bs-dismiss="modal" type="button">
   <span aria-hidden="true">×</span></button>
   </div>
   <div class="modal-body">
   <div class="row">
   <div class="col-md-6">
  <div class="col-lg"> <input class="form-control" placeholder="الإسم بالعربية" type="text"> </div>
   </div>
   <div class="col-md-6">
    <div class="col-lg"> <input class="form-control" placeholder="الوصف بالعربية" style=" text-align: right" type="text"> </div>
   </div>
   </div>
   <div class="row">
      <div class="col-md-12">
   <h5 class="card-title mg-b-20"style="float: right !important">الولاء</h5>
    </div>

   <div class="col-md-12">
   <div class="form-group">
   <div class="row row-sm">
   <div class="col-sm-9">
    <div class="col-md-6">
 <label class="main-content-label tx-11 tx-medium tx-gray-600"style="float: right !important">نقاط الولاء</label>
 <select name="" class="form-control SlectBox">
                                        <option selected = "" value="" selected disabled>-- اختر  --</option>
                                            <option >له نقاط استثنائية</option>
                                            <option >لا يحتسب له نقاط</option>

                                    </select>  
    </div>
   </div>
   
   <div class="col-sm-3 mg-t-20 mg-sm-t-0">
   <label class="main-content-label tx-11 tx-medium tx-gray-600"style="float: right !important"> طريقة   إحتساب    النقاط</label>
   <input class="form-control" required="" type="text">
   </div>
      <div class="col-md-12">
   <h5 class="card-title mg-b-20"style="float: right !important">الفروع المسموح لها المشاهدة و الإستخدام </h5>
   <select name="somename" class="form-control SlectBox SumoUnder" onclick="console.log($(this).val())" onchange="console.log('change is firing')" tabindex="-1">
   <!--placeholder--> <option style="float: right !important"title="Volvo is a car" value="volvo"> hammam elmlouk</option> </select>
    </div>
   </div>
   </div>
   </div>
   </div>
   </div>
   <div class="modal-footer">
      <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-success">حفظ</button>
   </div>
   </div>
   </div>
           
        </div>
    </div>
     
        </form>
</div>

    </div>
</div>
