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
                    'store_logo' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
                ]);
        $profileImage = '';
        if ($request->file('store_logo')) {
            $files = $request->file('store_logo');
            $destinationPath = 'public/image/'; // upload path
            $profileImage = date('YmdHis') . "." . $files->getClientOriginalExtension();
            $files->move($destinationPath, $profileImage);
        }
        $store = DB::table('store_info')->select('*');
        return datatables()->of($stores)
            ->make(true);
        // $project = Store::create($data);
        // $store = new Store();
        // $store->owner_name = $request->get('owner_name');
        // $store->store_name = $request->get('store_name');	
        // $store->email = $request->get('email');
        // $store->store_address = $request->get('store_address');		
        // $store->phone = $request->get('phone');	
        // $store->store_logo = $profileImage ?? '';
        // $store->created_by = \Auth::user()->id;
        // $store->updated_by = null;// $request->file->storeAs('filename', $request->file->getClientOriginalName(),'');				
        // $store->save();
        return redirect()->route('store.index')->withStatus(__('User successfully created.'));
        
    }

}
