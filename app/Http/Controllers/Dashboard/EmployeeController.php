<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Section;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees = Employee::get();
        return view('Dashboard.Employees.index',compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $sections = Section::all();
        return view('Dashboard.Employees.add',compact('sections'));
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

            $employees = new Employee();
            $employees->name = $request->name;
            $employees->address = $request->address;
            $employees->email = $request->email;
            $employees->section_id = $request->section_id;
            $employees->phone = $request->phone;
            $employees->phone2 = $request->phone2;
            $employees->job = $request->job;
            $employees->salary = $request->salary;
            $employees->status = 1;
            // dd($employees);
            $employees->save();

            DB::commit();
            session()->flash('add');
            return redirect()->route('Employees.create');

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

        $sections = Section::all();
        $employees = Employee::findorfail($id);
        return view('Dashboard.Employees.edit',compact('sections','employees'));

    }

    
    public function update(Request $request)
    {

        DB::beginTransaction();

        try {
            $employees = Employee::findorfail($request->id);


            $employees->name = $request->name;
            $employees->address = $request->address;
            $employees->email = $request->email;
            $employees->section_id = $request->section_id;
            $employees->phone = $request->phone;
            $employees->phone2 = $request->phone2;
            $employees->job = $request->job;
            $employees->salary = $request->salary;
            $employees->status = 1;
            // dd($employees);
            $employees->save();

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

     
            
               Employee::destroy($request->id);
               session()->flash('delete');
               return redirect()->route('Employees.index');
           }
     
     
           //---------------------------------------------------------------
     
           else{
     
               // delete selector doctor
               $delete_select_id = explode(",", $request->delete_select_id);
               foreach ($delete_select_id as $ids_employees){
                   $employees = Employee::findorfail($ids_employees);
                   
               }
     
               Employee::destroy($delete_select_id);
               session()->flash('delete');
               return redirect()->route('Employees.index');
           }
     
       
    }

    public function update_status(Request $request)
    {
        try {
            $employees = Employee::findorfail($request->id);
            $employees->update([
                'status'=>$request->status
            ]);

            session()->flash('edit');
            return redirect()->back();
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
