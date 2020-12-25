<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StoreController;


class StoreController extends Controller
{


    public function index(Request $request)
    {
        return view('store.storedashboard');
    } 
    
    public function create()
    {
        return view('store.create');
    }
    public function store(Request $request)
    {
       
        $cover = $request->file('filename');
        $extension = $cover->getClientOriginalExtension();
        Storage::disk('public')->put($cover->getFilename().'.'.$extension,  File::get($cover));
    
        $logo = new Logo();
        $logo->mime = $cover->getClientMimeType();
        $logo->filename = $cover->getFilename().'.'.$extension;
        $logo->save();
    
        return redirect()->route('store.storedashboard')
            ->with('success','Logo added successfully...');
    }

}
