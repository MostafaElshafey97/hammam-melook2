<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;


use App\Models\Service;
use App\Models\Client;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;




use Illuminate\Http\Request;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $clients = Client::all();

       
        return view('Dashboard.Clients.index',compact('clients'));
    }
    public function autocomplete(Request $request)
    {
        $data = User::select("name as value", "id")
                    ->where('name', 'LIKE', '%'. $request->get('search'). '%')
                    ->get();
    
        return response()->json($data);
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
// dd($request);

$rules = [
    'name' => 'required'
];

$messages = [
    'name.required' => 'You should enter the name '
];

$this->validate($request , $rules , $messages);

Client::create($request->all());

session()->flash('add');
return redirect()->route('clients.index');


      
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
        $sections = Client::where('code',$id)->get();
		 $service= Service::all();
        return view('Dashboard.clients.show',compact('sections'),compact('service'));
    }
    public function show1()
    {
        //
        $sections = Client::all();
		 $service= Service::all();
        return view('Dashboard.clients.show',compact('sections'),compact('service'));
    }
    
	 public function print()
    {
        //
      
        return view('Dashboard.clients.print');
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

    
    public function update(Request $request ,$id)
    {

        $rules = [
            'name' => ['required', Rule::unique('clients')->ignore($request->id) ]
        ];

        $messages = [
            'name.required' => 'You should enter the name of the client' 
        ];

        $this->validate($request , $rules , $messages);

        $record = Client::findOrFail($request->id); 
        $record->update($request->all());
            
            session()->flash('edit');
            return redirect()->back();

       
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

     
            
               Client::destroy($request->id);
               session()->flash('delete');
               return redirect()->route('clients.index');
           }
     
     
           //---------------------------------------------------------------
     
           else{
     
               // delete selector doctor
               $delete_select_id = explode(",", $request->delete_select_id);
               foreach ($delete_select_id as $ids_clients){
                   $clients = Client::findorfail($ids_clients);
                   
               }
     
               Client::destroy($delete_select_id);
               session()->flash('delete');
               return redirect()->route('clients.index');
           }
     
       
    }

    public function client_status(Request $request)
    {
        try {
            $client = Client::findOrFail($request->client_id);
            $client->status = $request->status;
            $client->save();
        
            return response()->json(['message' => 'تم تغيير حالة النشاط بنجاح.']);
        }

        catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => $e->getMessage()]);
        }
    }
}
