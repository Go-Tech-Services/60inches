<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StoreController;
use App\store;


class StoreController extends Controller
{


    public function index(Request $request)
    {
        return view('store.index');
    } 
    
    public function create()
    {
        return view('store.create');
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'store_name' => 'required', 
            'email' => 'required', 
            'store_address' => 'required', 
            'phone' => 'required',
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
       
        if ($request->file('filename')) {
            $files = $request->file('filename');
            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
        }
        
        $store = new Store();
        $store->name = $request->get('name');
        $store->store_name = $request->get('store_name');	
        $store->email = $request->get('email');		
		$store->password = $request->get('password');	
        $store->phone = $request->get('phone');	
        $store->store_address = $request->get('store_address');		
        $store->filename = $profileImage;
        // $request->file->storeAs('filename', $request->file->getClientOriginalName(),'');				
        $store->save();
        return redirect()->route('store.index')->withStatus(__('User successfully created.'));
        
    }
}
