<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ProductCategory;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class ProductCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $product_categories = ProductCategory::get();
        return view('Dashboard.ProductCategory.index',compact('product_categories'));
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
        // dd($request);



        DB::beginTransaction();

        try {

            $product_categories = new ProductCategory();
            $product_categories->name = $request->name;
            $product_categories->descreption = $request->descreption;
            $product_categories->status = 1;
            // dd($employees);
            $product_categories->save();

            DB::commit();
            session()->flash('add');
            return redirect()->route('productCategory.index');

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

        $product_categories = ProductCategory::findOrFail($request->id);
        $product_categories->update([
            'name' => $request->input('name'),
            'descreption' => $request->input('descreption'),

        ]);
        session()->flash('edit');
        return redirect()->route('productCategory.index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        ProductCategory::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('productCategory.index');

     
       
    }

    public function category_status(Request $request)
    {
        try {
            $product_category = ProductCategory::findOrFail($request->product_category_id);
            $product_category->status = $request->status;
            $product_category->save();
        
            return response()->json(['message' => 'تم تغيير حالة النشاط بنجاح.']);
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
      
    }
}
