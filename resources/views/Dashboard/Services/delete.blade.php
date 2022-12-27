<!-- Modal -->
<div class="modal fade" id="delete{{ $service->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    حذف موظف</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('services.destroy', 'test') }}" method="post">
                {{ method_field('delete') }}
                {{ csrf_field() }}
                <div class="modal-body">
                    <h5>  هل انت متاكد من عملية حذف الخدمة :
 {{$service->name}}؟</h5>
                    <input type="hidden" value="1" name="page_id">
                    <input type="hidden" name="id" value="{{ $service->id }}">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-danger">حذف</button>
                </div>
            </form>
        </div>
    </div>
</div>
