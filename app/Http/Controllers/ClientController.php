<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;
use App\Client;
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
        
        ]);

        $client = new Client();
        $client->client_name = $request->get('client_name');
        $client->client_phone = $request->get('client_phone');
        $client->altern_phone = $request->get('altern_phone');
        $client->store_id = $request->get('store_id');


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
    public function view(client $client)
    {
        
        return view('client.view', compact('client'));

    }
    public function withValidator($validator)
            {
            $validator->after(function ($validator) {
                if(client_info::where('client_phone', '=', $request->client_phone)->exists())  {
                    $validator->errors()->add('field', 'The Mobile number is already associated with another client,please enter a unique mobile number.');
                }
            });
        }
    public function destroy(client  $client)
        {
            $store->delete();
    
            return redirect()->route('client.index')->withStatus(__('User successfully deleted.'));
        }

}


