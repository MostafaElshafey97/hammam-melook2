<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class ServiceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service_categories = ServiceCategory::get();
        return view('Dashboard.ServiceCategory.index',compact('service_categories'));
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

            $service_categories = new ServiceCategory();
            $service_categories->name = $request->name;
            $service_categories->descreption = $request->descreption;
            $service_categories->status = 1;
            // dd($employees);
            $service_categories->save();

            DB::commit();
            session()->flash('add');
            return redirect()->route('serviceCategory.index');

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
        $services =ServiceCategory::findOrFail($id)->servicess;
        $service_categories = ServiceCategory::findOrFail($id);
        return view('Dashboard.ServiceCategory.show_services',compact('services','service_categories'));
      
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

        $service_categories = ServiceCategory::findOrFail($request->id);
        $service_categories->update([
            'name' => $request->input('name'),
            'descreption' => $request->input('descreption'),

        ]);
        session()->flash('edit');
        return redirect()->route('serviceCategory.index');
       
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        ServiceCategory::findOrFail($request->id)->delete();
        session()->flash('delete');
        return redirect()->route('serviceCategory.index');

     
       
    }

    public function category_service_status(Request $request)
    {

        
        try {
            $service_category = ServiceCategory::findOrFail($request->service_category_id);
            $service_category->status = $request->status;
            $service_category->save();
        
            return response()->json(['message' => 'تم تغيير حالة النشاط بنجاح.']);
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
