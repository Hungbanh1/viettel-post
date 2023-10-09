<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminManageController extends Controller
{
    //
    function index()
    {
        return view('admin.manage.bill_manage');
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
