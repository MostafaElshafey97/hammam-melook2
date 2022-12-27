<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\Section;
use Illuminate\Support\Facades\DB;



use Illuminate\Http\Request;

class SittingController extends Controller
{
    
 public function SiteSetting(){

    $setting = DB::table('sittings')->first();
    return view('Dashboard.Settings.site_setting',compact('setting'));

 
  }

  public function UpdateSiteSetting(Request $request){

    $id = $request->id;

    $data = array();
    $data['name'] = $request->name;
    $data['address1'] = $request->address1;
    $data['address2'] = $request->address2;
    $data['email1'] = $request->email1;
    $data['email2'] = $request->email2;

    $data['phone_one'] = $request->phone_one;
    $data['phone_two'] = $request->phone_two;
    $data['phone_three'] = $request->phone_two;
    $data['phone_four'] = $request->phone_two;

    $data['facebook'] = $request->facebook;
    $data['youtube'] = $request->youtube;
    $data['instagram'] = $request->instagram;
    $data['twitter'] = $request->twitter;
    DB::table('sittings')->where('id',$id)->update($data);
    $notification=array(
           'messege'=>'Site Setting Updated Successfully',
           'alert-type'=>'success'
            );
          return Redirect()->back()->with($notification); 

}

    
    
}
