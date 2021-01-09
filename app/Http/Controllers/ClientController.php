<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\ClientController;
use App\Client;

class ClientController extends Controller
{
    public function index(Request $request)
    {
        // $clients = Clients::all();
        return view('client.index');
        // ['clients' => $clients]);
    }
    public function create()
    {
        return view('client.create');
    }  
    public function store(UserRequest $request, User $model)
    {
        $request->validate([
        'client_name' => 'required',
        'phone' => 'required', 
        'altern_phone' => 'nullable', 
        'email' => 'nullable', 
        'birth_date' => 'date_format:Y-M-D|before:today|nullable',
        'client_address' => 'nullable',
        'client_city' => 'nullable|max:20',
        'pin_code' => 'nullable|digits:6',
        
        ]);

        $client = new Client();
        $client->client_name = $request->get('client_name');
        $client->phone = $request->get('phone');
        $client->altern_phone = $request->get('altern_phone');
        $client->email = $request->get('email');
        $client->birth_date = $request->get('birth_datebirth_date');
        $client->client_address = $request->get('client_address');
        $client->client_city = $request->get('client_city');
        $client->pin_code = $request->get('pin_code');
        $store->created_by = \Auth::user()->id;
        $client->updated_by = null;
        $client->url= str_slug($request->get('client_name'), "-");
        $client->save();

        return redirect()->route('client.index')->withStatus(__('User successfully created.'));

    }
}


