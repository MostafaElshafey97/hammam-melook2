<!-- Modal -->
<div class="modal fade" id="edit{{ $client->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل العميل</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('clients.update', 'test') }}" method="post"  autocomplete="off"enctype="multipart/form-data">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">اسم العميل</label>
                    <input type="hidden" name="id" value="{{ $client->id }}">
                    <input type="text" name="name" value="{{ $client->name }}" class="form-control">

                    <label for="exampleInputPassword1">العنوان</label>
                    <input type="text-aria" name="address"  value="{{ $client->address }}" class="form-control">
          

                                    <label for="exampleInputPassword1">الهاتف</label>
                    <input type="text" name="phone" value="{{ $client->phone }}" class="form-control">





                    <label for="exampleInputPassword1"> الموبايل </label>
                    <input type="text" name="phone2" value="{{ $client->phone2 }}" class="form-control">

                    <label for="exampleInputPassword1">  تاريخ الميلاد </label>
                    <input type="date" name="dob" value="{{ $client->dob}}" class="form-control">

                    <label for="exampleInputPassword1">  تاريخ الزواج </label>
                    <input type="date" name="dom" value="{{ $client->dom}}" class="form-control">


                    <label for="exampleInputPassword1"> المهنة </label>
                    <input type="text" name="job" value="{{ $client->job }}" class="form-control">

                    <label for="exampleInputPassword1"> رقم الكارت </label>
                    <input type="text" name="no_of_card" value="{{ $client->no_of_card }}" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>
    </div>
</div>
