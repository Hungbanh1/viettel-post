<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminLookUpController extends Controller
{
    //
    function index()
    {
        return view('admin.lookup.lookup');
    }
    function search()
    {
        return view('admin.lookup.lookup_search');
    }
}
