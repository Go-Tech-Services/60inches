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
        ]);
    
        // if(request()->hasFile('filename')){
        //     $filename=request()->file('filename')->getClientOriginalName();
        //     $extension = $filename->getClientOriginalExtension();
        //     $request()->file('filename')->storeAs('filename',$user->id.'/','');
        //     $user->update(['filename'->$filename]);
        //     Storage::disk('public')->put($filename->getFilename().'.'.$extension,  File::get($filename));
        //     $store->save();
        
        $store = new Store();
        
        $store->name=$request->get('name');
        $store->store_name=$request->get('store_name');	
        $store->email =$request->get('email');		
		$store->password=$request->get('password');	
        $store->phone =$request->get('phone');	
        $store->store_address=$request->get('store_address');		
        // $store->filename=$request->get('filename');
        // $request->file->storeAs('filename', $request->file->getClientOriginalName(),'');				
        $store->save();
        return redirect()->route('store.index')->withStatus(__('User successfully created.'));

        request()->validate([
            'filename' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
       ]);
       if ($files = $request->file('filename')) {
           $destinationPath = 'public/'; // upload path
           $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
           $files->move($destinationPath, $profileImage);
        }



        
      }
    }
