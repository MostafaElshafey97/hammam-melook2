<!-- Modal -->
<div class="modal fade" id="add" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">اضافة منتج</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="{{ route('products.store') }}" method="post" autocomplete="off"enctype="multipart/form-data">
                @csrf
                <div class="modal-body">
                    <label for="exampleInputPassword1">اسم المنتج</label>
                    <input type="text" name="name" class="form-control" size="50">

                                            <label for="Name"
                                                class="form-label">كود المنتج
                                                </label>
                                            <input class="form-control" type="text" name="code" />
                                            <label for="Name"
                                                class="form-label">صورة المنتج
                                                </label>
                                            <input class="form-control" type="file" name="avatar">
                    
                    <label for="exampleInputPassword1">  الفئة </label>
                    <select name="product_category_id" class="form-control SlectBox">
                                        <option value="" selected disabled>---اختر الفئة---</option>
                                        @foreach($product_categories as $product_category)
                                            <option value="{{$product_category->id}}">{{$product_category->name}}</option>
                                        @endforeach
                                    </select>  
                                    <label for="exampleInputPassword1"> سعر الشراء</label>
                    <input type="text" name="purchase_price" class="form-control"> 

                    <label for="exampleInputPassword1"> سعر البيع</label>
                    <input type="text" name="selling_price" class="form-control"> 

                    <label for="exampleInputPassword1">  العمولة</label>
                    <input type="number" name="commission_rate" class="form-control">

                                 </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">اغلاق</button>
                    <button type="submit" class="btn btn-primary">حفظ</button>
                </div>
            </form>

    


        </div>
    </div>
</div>
