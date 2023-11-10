<?php

namespace App\Http\Controllers;

use App\Bill;
use App\Detail_order;
use App\Order;
use App\Receiver;
use App\Sender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminManageController extends Controller
{
    //
    function bill_manage(Request $request)
    {
        $id = Auth::user()->id;
        $detailOrder = Detail_order::all();
        $order = Order::all();
        $count_processing = Detail_order::where('status',  'LIKE', '%Đang xử lý%')->count();
        $count_being_transported = Detail_order::where('status',  'LIKE', '%Đang giao hàng%')->count();
        $count_success = Detail_order::where('status',  'LIKE', '%Giao thành công%')->count();
        $count_cancel = Detail_order::where('status',  'LIKE', '%Shop hủy lấy%')->count();



        $count = [$count_processing, $count_being_transported, $count_success, $count_cancel];

        $bills = Detail_order::orderBy('updated_at', 'desc')->get();
        // $orderCount = Detail_order::count();
        $orderCount = $bills->count();
        $keyword = $request->input('keyword');
        // if ($keyword != '') {
        //     $bills = Detail_order::orderBy('updated_at', 'desc')->where('code_order', 'LIKE', "%$keyword%")->get();
        // }
        if ($keyword != '') {
            $bills = Detail_order::orderBy('updated_at', 'desc')
                ->where(function ($query) use ($keyword) {
                    $query->where('code_order', 'LIKE', "%$keyword%")
                        ->orWhere('phone_sender', 'LIKE', "%$keyword%");
                })
                ->get();
        }
        if ($bills->count() === 0) {
            return view('admin.manage.bill_manage', compact('bills', 'orderCount', 'count', 'keyword'))->with('message', 'Không có bản ghi nào.');
        }

        $status = $request->input('status_order');
        // echo $status;

        // dd($status);
        if ($status == 'all') {
            $bills = Detail_order::paginate(10);
        } elseif ($status == 'processing') {
            $bills = Detail_order::where('status', 'LIKE', '%Đang xử lý%')->paginate(10);
        } elseif ($status == 'being_transported') {
            $bills = Detail_order::where('status', 'LIKE', '%Đang giao hàng%')->paginate(10);
        } elseif ($status == 'cancel') {
            $bills = Detail_order::where('status', 'LIKE', '%Shop hủy lấy%')->paginate(10);
        } elseif ($status == 'successful') {
            $bills = Detail_order::where('status', 'LIKE', '%Giao thành công%')->paginate(10);
        }

        return view('admin.manage.bill_manage', compact('bills', 'keyword', 'orderCount', 'count'));
    }
    function detail_order($order_id)
    {
        $order_id = Auth::user()->id;
        // echo $order_id;
        return view('admin.order.detail_order');
    }
    function list()
    {

        $all = Receiver::all();
        return view('admin.manage.staticts_list_reci', compact('all'));
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
    function manage_receiver()
    {
        return view('admin.manage.manage_receiver');
    }
    function add_receiver(Request $request)
    {
        // echo "ok";
        $sender = new Sender();
        $sender->user_id = Auth::user()->id;
        $sender->name = $request->input('name');
        // echo $request->name;
        $sender->phone = $request->input('phone');
        // echo $request->phone;

        $sender->address = $request->input('address');
        $sender->final_address = $request->input('name') . ' - ' . $request->input('address');
        $sender->save();
        // echo $request->input('name') . ' - ' . $request->input('address');
        return redirect('setting_sender');
    }
    function setting_sender()
    {
        $id = Auth::user()->id;
        // echo "id là " . $id;
        $sender = Sender::where("user_id", $id)->get();
        // foreach ($sender as $item) {
        //     echo $item->name;
        // }
        // print_r($sender);
        return view('admin.user.setting_sender', compact('sender'));
    }
}
