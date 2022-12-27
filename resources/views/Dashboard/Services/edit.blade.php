<!-- Modal -->
<div class="modal fade" id="edit{{ $service->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل الخدمة</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('services.update', 'test') }}" method="post"  autocomplete="off"enctype="multipart/form-data">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">اسم الخدمة</label>
                    <input type="hidden" name="id" value="{{ $service->id }}">
                    <input type="text" name="name" value="{{ $service->name }}" class="form-control">

                    <label for="exampleInputPassword1">الكود</label>
                    <input type="text-aria" name="code"  value="{{ $service->code }}" class="form-control">
                    <label for="exampleInputPassword1"> الفئة </label>
                    <select name="service_category_id" class="form-control SlectBox">
                                        @foreach($service_categories as $service_category)
                                            <option
                                                value="{{$service_category->id}}" {{$service_category->id == $service->service_category_id ? 'selected':"" }}>{{$service_category->name}}</option>
                                        @endforeach

                                    </select>

                                    <label for="exampleInputPassword1"> صورة الخدمة </label>
                    <input type="file" name="photo" value="{{ $service->photo }}" class="form-control">





                    <label for="exampleInputPassword1"> سعر الخدمة </label>
                    <input type="text" name="price" value="{{ $service->price }}" class="form-control">

                    <label for="exampleInputPassword1"> سعر الخصم </label>
                    <input type="text" name="offer_price" value="{{ $service->offer_price }}" class="form-control">

                    <label for="exampleInputPassword1"> توقيت الخدمة </label>
                    <input type="text" name="service_time" value="{{ $service->service_time }}" class="form-control">


                    <label for="exampleInputPassword1"> العمولة </label>
                    <input type="text" name="commission_rate" value="{{ $service->commission_rate }}" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>
    </div>
</div>
