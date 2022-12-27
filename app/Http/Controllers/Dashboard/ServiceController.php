<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\ServiceCategory;
use Auth;
use App\Models\appointement_client;
use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;





use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function rendezvous(){
        return view('Dashboard.rendezvous.index');    }


public function saveInvoice(Request $request){
 //$userID=Auth::user()->id;
//dd( $request->all());
    $dossier= $request->submit;
        $checker = appointement_client::select('code_invoice')->exists();
		 $code_invoice='0001';
     if (!$checker){
	 $code_invoice='0001';
	 foreach($request->nameServices as $lsite){
	
    $saveInvoice   = new appointement_client;
	foreach($request->nameProduct as $product){
	 $product=$request->nameProduct;
	}
    $saveInvoice->client_id=$request->client_name;
	 $saveInvoice->code_invoice=$code_invoice;
    $saveInvoice->name_Services=$lsite;
    // $saveInvoice->user_create=$userID;
    $saveInvoice->paid=$product;
	$saveInvoice->name_Product=$request->paid;
    $saveInvoice->remane_paiment=$request->remane_paiment;
    $saveInvoice->paiment_type=$request->paiment_type;
	$saveInvoice->type_invoice=$request->submit;
	$saveInvoice->kabten=$request->kabten;
	$saveInvoice->Amil=$request->Amil;
    $saveInvoice->save();
	}
	
	   return view('Dashboard.rendezvous.index',compact('saveInvoice'));
	}
	
	else{
		
		  $code_invoice=$code_invoice +1;
		  $code_invoices= str_pad($code_invoice, 4, '0', STR_PAD_LEFT);
		   foreach($request->nameServices as $lsite){
	
    $saveInvoice   = new appointement_client;
    $saveInvoice->client_id=$request->client_name;
	 $saveInvoice->code_invoice=$code_invoices;
    $saveInvoice->name_Services=$lsite;
    // $saveInvoice->user_create=$userID;
    $saveInvoice->paid=$request->paid;
    $saveInvoice->remane_paiment=$request->remane_paiment;
    $saveInvoice->paiment_type=$request->paiment_type;
	 $saveInvoice->type_invoice=$request->submit;
    $saveInvoice->save();}
		  
		
		    return view('Dashboard.rendezvous.index',compact('saveInvoice'));
    
}
    
 

}

public function print(Request $request,$id){
   
        //
			return $request->all();
      
        return view('Dashboard.clients.print');
    }
	
    public function index()
    {
        
    

         $services = Service::all();
         $service_categories = ServiceCategory::get();

        

        return view('Dashboard.Services.index',compact('services','service_categories'));
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
        // DB::beginTransaction();

        // try {

        //     $services=Service::create([
        //     'name'=>$request->name,
        //     'code'=>$request->code,
        //     'service_category_id'=>$request->service_category_id,
        //     'price'=> $request->price,
        //     'offer_price' => $request->offer_price,
        //     'service_time' => $request->service_time,

        //     'commission_rate' => $request->commission_rate,
        //     'status'=> $request->status =1
        // ]);

         
        //    if($request->hasFile('photo')){
        //        $services->update([
        //             'photo'=>$request->file('photo')->store('photoes')
        //        ]);
        //    }
        // //    dd($request);

        
 

        //     DB::commit();
        //     session()->flash('add');
        //     return redirect()->route('services.index');

        // }
        // catch (\Exception $e) {
        //     DB::rollback();
        //     return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        // }


        $rules = [
            'service_category_id' => 'required' ,
            'name'       => 'required' ,
           // 'image'       => 'image|nullable'
        ];

        $messages = [
            'image.image' => 'The file must be an image'
        ];

        $this->validate($request , $rules , $messages);

        if($request->hasFile('photo'))
        {
            $path = $request->file('photo')->store('public/service_images');
        }

       $services= Service::create($request->all());

        if($request->hasFile('photo'))
        {
            $services->photo = $request->photo->hashName();
            $services->save();
        }
        session()->flash('add');
           return redirect()->route('services.index');
        

      
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

        // DB::beginTransaction();

        // try {
        //     $services = Service::findorfail($request->id);

        //     if($request->hasFile('photo')){
        //         $services->update([
        //              'photo'=>$request->file('photo')->store('photoes')
        //         ]);
        //     }
        //     $services->update($request->all());

        //     DB::commit();
        //     session()->flash('edit');
        //     return redirect()->back();

        // }
        // catch (\Exception $e) {
        //     DB::rollback();
        //     return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        // }

        $rules = [
            'service_category_id' => 'required' ,
            'name'       => 'required' ,
            'image'       => 'image|nullable'
        ];

        $messages = [
            'image.image' => 'The file must be an image'
        ];

        $this->validate($request , $rules , $messages);

        $services = Service::findorfail($request->id);
        $old_image = $services->photo;
        $services->update($request->all());
        
        if($request->hasFile('photo'))
        {
            Storage::delete('public/service_images/'.$old_image);
            $path = $request->file('photo')->store('public/service_images');
            $services->photo = $request->photo->hashName();
            $services->save();
        }

        else 
        {
            if($request->input('remove'))
            {
                Storage::delete('public/service_images/'.$old_image);
                $services->photo = null;
                $services->save();
            }

        }

        session()->flash('edit');
            return redirect()->back();
        
       // return redirect(url(route('post.index')))->with('success','Post updated successfully!');
       



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

     
            
               Service::destroy($request->id);
               session()->flash('delete');
               return redirect()->route('services.index');
           }
     
     
           //---------------------------------------------------------------
     
           else{
     
               // delete selector doctor
               $delete_select_id = explode(",", $request->delete_select_id);
               foreach ($delete_select_id as $ids_services){
                   $services = Service::findorfail($ids_services);
                   
               }
     
               Service::destroy($delete_select_id);
               session()->flash('delete');
               return redirect()->route('services.index');
           }
     
       
    }

    public function update_status(Request $request)
    {
        try {
            $service = Service::findOrFail($request->service_id);
            $service->status = $request->status;
            $service->save();
        
            return response()->json(['message' => 'تم تغيير حالة النشاط بنجاح.']);
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
