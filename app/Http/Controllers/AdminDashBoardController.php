<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Notifications\Action;

class AdminDashBoardController extends Controller
{
    //
    function index()
    {
        // echo "ok";
        return view("admin.dashboard");
    }
}
