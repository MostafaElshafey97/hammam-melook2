<!-- Modal -->
<div class="modal fade" id="edit{{$service_category->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل الفئة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('serviceCategory.update', 'test') }}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">اسم الفئة</label>
                    <input type="hidden" name="id" value="{{ $service_category->id }}">
                    <input type="text" name="name" value="{{ $service_category->name }}" class="form-control">

                    <label for="exampleInputPassword1">الوصف</label>
                    <input type="textarea" name="descreption"  value="{{ $service_category->descreption }}" class="form-control">

                    
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">{{trans('Dashboard/sections_trans.Close')}}</button>
                    <button type="submit" class="btn btn-primary">{{trans('Dashboard/sections_trans.submit')}}</button>
                </div>
            </form>
        </div>
    </div>
</div>
