<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminUserController extends Controller
{
    //
    // function test()
    // {
    //     $users = User::all();

    //     foreach ($users as $user) {
    //         echo $user->name;

    //         // Lấy thông tin "Receive" cho mỗi "User"
    //         $receiveData = $user->recieve; // Chú ý rằng "recieve" là một phương thức

    //         foreach ($receiveData as $receive) {
    //             echo $receive->phone;
    //         }
    //     }
    // }
    function testt()
    {
        return view('admin.user.test');
    }
    function setting()
    {
        // $name = Auth::user()->name;
        // echo $name;
        // $id = Auth::user()->id;
        // echo $id;
        // $users = User::find('id', $id);

        return view("admin.user.setting_acc");
    }
    function change_password()
    {
        return view("admin.user.change_password");
    }
    function add_account()
    {
        return view("admin.user.add_account");
    }
    function setting_info_send()
    {
        return view("admin.user.setting_info_send");
    }
    function config_user()
    {
        return view("admin.user.config_user");
    }
}
