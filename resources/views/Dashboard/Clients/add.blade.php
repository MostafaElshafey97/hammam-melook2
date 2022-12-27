<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافة عميل</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('clients.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">اسم العميل</label>
                    <input type="text" name="name" class="form-control" size="50">

                                            <label for="Name"
                                                class="form-label">العنوان
                                                </label>
                                            <input class="form-control" type="text" name="address">
                    
              
                     <label for="exampleInputPassword1">  الهاتف</label>
                    <input type="text" name="phone" class="form-control"> 
                    <label for="exampleInputPassword1">   الموبايل</label>
                    <input type="text" name="phone2" class="form-control">
                    <label for="exampleInputPassword1">  تاريخ الميلاد </label>
                    <input type="date" name="dob" class="form-control">
                    <label for="exampleInputPassword1">  تاريخ الزواج</label>
                    <input type="date" name="dom" class="form-control">
                    <label for="exampleInputPassword1">   المهنة</label>
                    <input type="text" name="job" class="form-control">
                    <label for="exampleInputPassword1">   رقم الكارت</label>
                    <input type="text" name="no_of_card" class="form-control">

                                 </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>

    


        </div>
    </div>
</div>
