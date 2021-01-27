<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Controllers\StoreController;
use Redirect,Response,DB,Config;
use Datatables;
use App\Store;


class StoreController extends Controller
{


    public function index(Request $request)
    {
        $stores = Store::all();
        return view('store.index',['stores' => $stores]);
    } 
    
    public function create()
    {
        return view('store.create');
    }
    public function store(Request $request){
        //  dd($request);
        // dd(\Auth::user()->id);
        // $rules = array(
        //     'owner_name' => 'required',
        //     'store_name' => 'required', 
        //     'email' => 'required', 
        //     'store_address' => 'required', 
        //     'phone' => 'required',
        //     'store_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
        // );
        // $data = $request->all();
        // $validator = \Validator::make($request->all(), $rules);
        // dd($request);  
       $request->validate([
           
            'owner_name' => 'required',
            'store_name' => 'required', 
            'email' => 'required', 
            'store_address' => 'required', 
            'phone' => 'required',
             'store_logo' => 'required',
            //'store_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        
            'password' => 'required'

        ]);
       
        $store = new Store();
        $store->owner_name = $request->get('owner_name');
        $store->store_name = $request->get('store_name');	
        $store->email = $request->get('email');
        $store->store_address = $request->get('store_address');		
        $store->phone = $request->get('phone');	
        // $store->store_logo = $profileImage ?? '';
        $store->store_logo = $request->get('store_logo');

        // $request->store_logo->move(public_path('images'), $input['store_logo']);

        // Store::create($input);

        $store->password = $request->get('password');
       
        $store->created_by = \Auth::user()->id;
        $store->updated_by = null;// $request->file->storeAs('filename', $request->file->getClientOriginalName(),'');				
        $store->url= str_slug($request->get('store_name'), "-");
        $store->save();
    
        // return redirect()->route('store.index')->withStatus(__('Store successfully created.'));

    }
    public function edit($id)
    {   
        
        // $id = $request->id;
        $store = Store::find($id);
        return view('store.edit', compact('store'));
    }

    public function update(Request $request)
    {

         $request->validate([
            'owner_name' => 'required',
            'store_name' => 'required', 
            'email' => 'required', 
            'store_address' => 'required', 
            'phone' => 'required',
            'store_logo' => 'required',
            // 'store_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // 'password_confirmation' => 'required',
            // 'password' => 'required',

        ]);
        // if($request->hasFile('filename'))
        // {
        //     $filename = $request->file('store_logo');
        //     $path = '/src/uploads/avatars/';
        //     $filename = time(). '.' . $avatar->getClientOriginalExtension();
        //     Image::make($avatar)->save(public_path($path . $filename));
        //     $request->store()->store_logo = $filename;
        //    $request->store()->save();
        // }
         
          $id = $request->id;
          $store = Store::find($id);
        
       // $store->update($request->all());
        $store->owner_name = $request->get('owner_name');
        $store->store_name = $request->get('store_name');	
        $store->email = $request->get('email');
        $store->store_address = $request->get('store_address');		
        $store->phone = $request->get('phone');	
        // $store->store_logo = $profileImage ?? '';
        $store->store_logo = $request->get('store_logo');
       // $store->password = $request->get('password');
        // $store->password_confirmation = $request->get('password_confirmation');
        $store->created_by = \Auth::user()->id;
        $store->updated_by = null;// $request->file->storeAs('filename', $request->file->getClientOriginalName(),'');				
        $store->url= str_slug($request->get('store_name'), "-");

       
         $store->save();

        return redirect('/store')->withStatus(__('User successfully updated.'));
          
       
    }
    public function show( $id)
    {
        // $id = $request->id;
        // $store = Store::find($id);
        // return redirect('/store')->withStatus(__('User successfully updated.'));
       // return view('store.show');
          
       
    }

    public function destroy(Store $store)
    {
        // $id = $request->id;
        // $store = Store::find($id);
       $store->delete();

        return redirect('/store')->withStatus(__('User successfully deleted.'));
    }

}
