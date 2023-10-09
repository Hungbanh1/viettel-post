<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminOrderController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            session(['module_active' => 'order']);
            return $next($request);
        });
    }
    function list()
    {
        return view('admin.order.order');
    }
    function order_excel()
    {
        return view('admin.order.order_excel');
    }
}
