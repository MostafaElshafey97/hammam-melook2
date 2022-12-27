<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $products = Product::get();
        $product_categories = ProductCategory::get();

        $products = Product::whenSearch(request()->search)
        ->paginate(11);

        return view('Dashboard.Products.index',compact('products','product_categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
      
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::beginTransaction();

        try {

            $products=Product::create([
                'name'=>$request->name,
               'code'=>$request->code,
               'product_category_id'=>$request->product_category_id,
               'purchase_price'=>$request->purchase_price,
               'selling_price'=>$request->selling_price,
               'commission_rate'=>$request->commission_rate,
              'status'=> $request->status =1

           ]);
           if($request->hasFile('avatar')){
               $products->update([
                    'avatar'=>$request->file('avatar')->store('avatars')
               ]);
           }



            DB::commit();
            session()->flash('add');
            return redirect()->route('products.index');

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }

      
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

     

    }

    
    public function update(Request $request)
    {

        DB::beginTransaction();

        try {
            $products = Product::findorfail($request->id);


            $products->name = $request->name;
            $products->code = $request->code;
            $products->product_category_id = $request->product_category_id;
            $products->purchase_price = $request->purchase_price;
            $products->selling_price = $request->selling_price;

            $products->commission_rate = $request->commission_rate;
            $products->status = 1;
            //  dd($services);
            $products->save();

            DB::commit();
            session()->flash('edit');
            return redirect()->back();

        }
        catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if($request->page_id==1){

     
            
               Product::destroy($request->id);
               session()->flash('delete');
               return redirect()->route('products.index');
           }
     
     
           //---------------------------------------------------------------
     
           else{
     
               // delete selector product
               $delete_select_id = explode(",", $request->delete_select_id);
               foreach ($delete_select_id as $ids_products){
                   $products = Product::findorfail($ids_products);
                   
               }
     
               Product::destroy($delete_select_id);
               session()->flash('delete');
               return redirect()->route('products.index');
           }
     
       
    }

    public function product_status(Request $request)
    {
        try {
            $product = Product::findOrFail($request->product_id);
            $product->status = $request->status;
            $product->save();
        
            return response()->json(['message' => 'تم تغيير حالة النشاط بنجاح.']);
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
