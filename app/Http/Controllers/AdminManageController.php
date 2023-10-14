<?php

namespace App\Http\Controllers;

use App\Bill;
use Illuminate\Http\Request;


class AdminManageController extends Controller
{
    //
    function index()
    {
        $bills = Bill::all();
        return view('admin.manage.bill_manage', compact('bills'));
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
