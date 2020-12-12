<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\StoreController;


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
}
