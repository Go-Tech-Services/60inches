<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;
use App\Client;
use App\Measurements;
use App\Http\Controllers\StoreController;
use App\Store;


class ClientController extends Controller
{
    public function index(Request $request)
    {
       
        $clients = Client::all();
        return view('client.index',['clients' => $clients]);
    }
    public function create()
    {
       
        $storelist = Store::all();
        // dd($storelist);
        return view('client.create', compact(
                'storelist'
            )
        );
    

        // return view('client.create');
    }  
   
 public function store(Request $request)
    {
        // dd($request);
        $request->validate([
        'client_name' => 'required',
        'client_phone' => 'required|', 
        // 'altern_phone' => 'required',
        // 'email' => 'required',
        'birth_date' => 'nullable|date_format:m/d/Y|before:today',
        // 'client_address' => 'required',
        'client_city' => 'max:20',
        'pin_code' => 'nullable|digits:6',
        'gender'=> 'required',
        
        
        
        ]);
       // $measurement = Measurements::all();
        $client = new Client();
        $client->client_name = $request->get('client_name');
        $client->client_phone = $request->get('client_phone');
        $client->altern_phone = $request->get('altern_phone');
        $client->store_id = $request->get('store_id');
       //$Measurements->neck = $request->get('neck');
        $client->gender = $request->get('gender');

        $client->email = $request->get('email');
       // $client->birth_date = $request->get('birth_date');
        $date = date('Y-m-d', strtotime( $request->get('birth_date')));
        $client->birth_date = $date;
        $client->client_address = $request->get('client_address');
        $client->client_city = $request->get('client_city');
        $client->pin_code = $request->get('pin_code');
        $client->created_by = \Auth::user()->id;
        $client->updated_by = null;
        $client->url= str_slug($request->get('client_name'), "-");
        $client->save();
            
        return redirect('client/index')->withStatus(__('User successfully created.'));

    }
    public function view(Request $request)
    {
       // $measurement = Measurements::all();
        $id = $request->id;
        $client = Client::find($id);
        return view('client.view', compact('client','measurement'));

    }
    public function edit($id)
    {   
        
        $client = Client::find($id);
        return view('client.edit', compact('client'));
    }

    public function update(Request $request)
    {        
     // dd($request);
      $request->validate([
        'client_name' => 'required',
        'client_phone' => 'required|', 
        'email' => 'required',
        'client_address' => 'required',
        'client_city' => 'max:20',
        'pin_code' => 'nullable|digits:6',
         ]);
      
         $id = $request->id;
         $client = Client::find($id);
         
         $client->client_name = $request->get('client_name');
         $client->client_phone = $request->get('client_phone');
         $client->email = $request->get('email');
         $client->client_address = $request->get('client_address');
         $client->client_city = $request->get('client_city');
         $client->pin_code = $request->get('pin_code');
         $client->created_by = \Auth::user()->id;
         $client->updated_by = null;
         $client->url= str_slug($request->get('client_name'), "-");

         $client->save();
         return redirect('/client/index')->withStatus(__('User successfully updated.'));


    }

    public function show( $id)
    {        
       
    }


    public function withValidator($validator)
            {
            $validator->after(function ($validator) {
                if(client_info::where('client_phone', '=', $request->client_phone)->exists())  {
                    $validator->errors()->add('field', 'The Mobile number is already associated with another client,please enter a unique mobile number.');
                }
            });
        }
    public function destroy(Request $request)
        {

            $id = $request->id;
            $client = Client::find($id);
            $client->delete();
    
            return redirect('/client/index')->withStatus(__('User successfully deleted.'));
        }

        public function measurementStore(Request $request)
        {
             $request->validate([
               
             ]);
    
            $measurement = new Measurements();
            $measurement->client_id = $request->get('client_id');
            $measurement->neck = $request->get('neck'); 
            $measurement->shoulder = $request->get('shoulder');
            $measurement->upper_bust = $request->get('upper_bust');
            $measurement->bust = $request->get('bust');
            $measurement->cup = $request->get('cup');
            $measurement->under_bust = $request->get('under_bust');
            $measurement->upper_waist = $request->get('upper_waist');
            $measurement->hips = $request->get('hips');
            $measurement->knee = $request->get('knee');
            $measurement->ankle = $request->get('ankle');
            $measurement->thigh_round = $request->get('thigh_round');
            $measurement->calf_round = $request->get('calf_round');
            $measurement->dark_point = $request->get('dark_point');
            $measurement->fork = $request->get('fork');
            $measurement->shoe_size = $request->get('shoe_size');
            $measurement->save();
                
            return redirect('client/view')->withStatus(__(''));
    
        }
    
        public function measurementUpdate(Request $request)
        {
            
            $ $id = $request->id;
            $measurement = Measurements::find($id);
            $measurement->client_id = $request->get('client_id');
            $measurement->neck = $request->get('neck'); 
            $measurement->shoulder = $request->get('shoulder');
            $measurement->upper_bust = $request->get('upper_bust');
            $measurement->bust = $request->get('bust');
            $measurement->cup = $request->get('cup');
            $measurement->under_bust = $request->get('under_bust');
            $measurement->upper_waist = $request->get('upper_waist');
            $measurement->hips = $request->get('hips');
            $measurement->knee = $request->get('knee');
            $measurement->ankle = $request->get('ankle');
            $measurement->thigh_round = $request->get('thigh_round');
            $measurement->calf_round = $request->get('calf_round');
            $measurement->dark_point = $request->get('dark_point');
            $measurement->fork = $request->get('fork');
            $measurement->shoe_size = $request->get('shoe_size');
            $measurement->save();
                
            return redirect('client/view/{id}')->withStatus(__(''));
    
        }
   


}


