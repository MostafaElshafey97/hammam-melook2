<!-- Modal -->
<div class="modal fade" id="edit{{ $product->id }}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">تعديل المنتج</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('products.update', 'test') }}" method="post">
                {{ method_field('patch') }}
                {{ csrf_field() }}
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">اسم المنتج</label>
                    <input type="hidden" name="id" value="{{ $product->id }}">
                    <input type="text" name="name" value="{{ $product->name }}" class="form-control">

                    <label for="exampleInputPassword1">الكود</label>
                    <input type="text-aria" name="code"  value="{{ $product->code }}" class="form-control">
                    <label for="exampleInputPassword1"> الفئة </label>
                    <select name="product_category_id" class="form-control SlectBox">
                                        @foreach($product_categories as $product_category)
                                            <option
                                                value="{{$product_category->id}}" {{$product_category->id == $product->product_category_id ? 'selected':"" }}>{{$product_category->name}}</option>
                                        @endforeach

                                    </select>

                                  



                  <label for="exampleInputPassword1"> سعر الشراء </label>
                    <input type="text" name="purchase_price" value="{{ $product->purchase_price }}" class="form-control">


                    <label for="exampleInputPassword1"> سعر البيع </label>
                    <input type="text" name="selling_price" value="{{ $product->selling_price }}" class="form-control">

                    
                    <label for="exampleInputPassword1"> العمولة </label>
                    <input type="number" name="commission_rate" value="{{ $product->commission_rate }}" class="form-control">
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>
        </div>
    </div>
</div>
