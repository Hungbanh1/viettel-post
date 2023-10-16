<?php

namespace App\Http\Controllers;

use App\Detail_order;
use App\Sender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
    function detail_order($order_id)
    {
        $detail_order = Detail_order::find($order_id);

        return view('admin.order.detail_order', compact('detail_order'));
    }
    function list()
    {
        $id = Auth::user()->id;
        $sender = Sender::find($id)->all();
        // echo $sender->name;
        return view('admin.order.order', compact('sender'));
    }
    function order_excel()
    {
        return view('admin.order.order_excel');
    }
}
