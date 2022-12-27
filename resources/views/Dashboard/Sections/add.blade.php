<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافة فرع</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('Sections.store') }}" method="post" autocomplete="off">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">اسم الفرع</label>
                    <input type="text" name="name" class="form-control">
                    <label for="exampleInputPassword1">عنوان الفرع</label>
                    <textarea name="address" class="form-control"></textarea>
                    <label for="exampleInputPassword1">الهاتف الارضي </label>
                    <input type="text" name="phone" class="form-control">
                    <label for="exampleInputPassword1"> رقم الموبايل</label>
                    <input type="text" name="mobile" class="form-control">
                    <label for="exampleInputPassword1">رقم موبايل اخر </label>
                    <input type="text" name="mobile2" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/sections_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/sections_trans.submit')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
