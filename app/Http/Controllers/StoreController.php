<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Store;

class StoreController extends Controller
{


    public function index(Store $model)
    {
        return view('store.index');
    } 
    
    public function create()
    {
        return view('store.create');
    }
}
