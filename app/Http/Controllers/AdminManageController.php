<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Detail_order;
use Illuminate\Http\Request;


class AdminManageController extends Controller
{
    //
    function index(Request $request)
    {
        $bills = Detail_order::all();
        $keyword = $request->input('keyword');
        if ($keyword != '') {
            $bills = Detail_order::where('code_order', 'LIKE', "%$keyword%")->get();
            // $bills = Detail_order::where('phone_sender', 'LIKE', "%$keyword%")->get();
        }
        if ($bills->count() === 0) {
            return view('admin.manage.bill_manage', compact('bills', 'keyword'))->with('message', 'Không có bản ghi nào.');
        }


        return view('admin.manage.bill_manage', compact('bills', 'keyword'));
    }
    function detail_order($order_id)
    {
        $order_id = $_POST['order_id'];
        echo $order_id;
        // return view('admin.order.detail_order');
    }
    function list()
    {
        return view('admin.manage.staticts_list_reci');
    }
    function staticts_order()
    {
        return view('admin.manage.staticts_order');
    }
    function staticts_process()
    {
        return view('admin.manage.staticts_process');
    }
    function staticts_reve()
    {
        return view('admin.manage.staticts_reve');
    }
}
