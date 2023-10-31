<?php

namespace App\Http\Controllers;

use App\Detail_order;
use App\Order;
use App\Receiver;
use App\Sender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Validation\Rule;

class AdminOrderController extends Controller
{
    //
    function __construct()
    {
        $this->middleware(function ($request, $next) {
            session(['module_active' => ['order', 'order_excel']]); // Gán một mảng chứa nhiều giá trị cho biến module_active
            return $next($request);
        });
    }

    function add(Request $request)
    {


        $request->validate([
            'name' => 'required|string|max:255',
            'phone' => 'regex|string|max:255',
            'address' => 'required|string',
            'city' => 'required|string',
            'ward' => 'required|string',
            'district' => 'required|string',
            'village' => 'required|string',
            'special_features' => 'array',
            'length' => 'required|numeric',
            'width' => 'required|numeric',
            'height' => 'required|numeric',
            'shipmentType' => 'required|string',
            'product_name' => 'required|string|max:255',
            'price_product' => 'required|numeric',
            'receiver' => 'required|string',
            'qty' => 'required|numeric',
            'kg' => 'required|numeric',
            'fee_ship' => 'required|numeric',
            'code_order' => 'required|string|unique:detail_orders,code_order', // Kiểm tra mã đơn hàng là duy nhất trong bảng detail_orders
            'payer' => ['required', Rule::in(['sender', 'receiver'])], // Kiểm tra giá trị 'payer' chỉ có thể là 'sender' hoặc 'receiver'
            'pick_request' => 'required|string',
            'time_ship' => 'required|date',
        ]);

        $bills = Detail_order::all();
        $senderId = $request->input('select_sender');
        // echo $senderId;
        $info_sender = Sender::find($senderId);
        // echo $info_sender;
        $phone_sender = $info_sender->phone;
        $name_sender = $info_sender->name;
        $form_ship = $request->input('form_ship');
        $total = $request->input('qty') * str_replace(',', '', $request->input('price_product'));
        if (empty($form_ship)) {
            $form_ship = "Không thu hộ";
        }
        // Lưu người nhận (receiver) vào cơ sở dữ liệu
        $receiver = Receiver::create([
            'sender_id' => $senderId,
            'name' => $request->input('name'),
            'phone' => $request->input('phone'),
            'address' => $request->input('address'),
            'city' => $request->input('city'),
            'ward' => $request->input('ward'),
            'district' => $request->input('district'),
            'village' => $request->input('village'),
        ]);

        // // Trích xuất dữ liệu từ request
        $selectedSpecialFeatures = $request->input('special_features', []);
        $selectedSpecialFeaturesString = implode(', ', $selectedSpecialFeatures);

        $length = $request->input('length');
        $width = $request->input('width');
        $height = $request->input('height');
        $size =  $length . 'x' . $width . 'x' . $height;



        $detail_order = new Detail_order();
        $detail_order->commod = $request->input('shipmentType');
        $detail_order->product_name = $request->input('product_name');
        $detail_order->price_product = $request->input('price_product');
        $detail_order->receiver = $request->input('receiver');
        $detail_order->qty = $request->input('qty');
        $detail_order->kg = $request->input('kg');
        $detail_order->total_kg = $request->input('kg');
        $detail_order->special_product = $selectedSpecialFeaturesString;
        $detail_order->total = $total;
        $detail_order->size = $size;
        $detail_order->phone_receiver = $request->input('phone');
        $detail_order->receiver = $request->input('name');
        $detail_order->phone_sender = $phone_sender;
        $detail_order->sender = $name_sender;
        $detail_order->status = "Đang xử lý";
        $detail_order->transfer_ser = "Chuyển phát tiêu chuẩn";
        $detail_order->success_order = "99";
        $detail_order->print = "Chưa in";
        $detail_order->fee_ship = $request->input('fee_ship');
        $detail_order->total_fee = $request->input('fee_ship');
        $detail_order->form_ship =  $form_ship;
        $detail_order->code_order = $request->input('code_order');
        $detail_order->payer = $request->input('payer');
        $detail_order->pick_request = $request->input('pick_request');
        $detail_order->time_ship = $request->input('time_ship');
        $detail_order->save();
        $date = $detail_order->created_at;
        $date_giao = Carbon::parse($date)->addDays(2)->format('d/m/Y');
        $date_nhan = Carbon::parse($date)->addDays(3)->format('d/m/Y');

        $detail_order->date_giao = $date_giao;
        $detail_order->date_nhan = $date_nhan;
        $detail_order->save();
        $order = Order::create([
            'user_id' => Auth::user()->id,
            'sender_id' => $senderId,
            'receiver_id' => $receiver->id,
            'detail_id' => $detail_order->id,
        ]);
        // // Lưu xong
        // return view('admin.manage.bill_manage', compact('bills'));
        return redirect()->route('order')->with('success', 'Đã thêm đơn hàng thành công.');
    }
    function detail_order($order_id)
    {
        $detail_order = Detail_order::find($order_id);
        // echo "order_id là :" . $order_id;
        // echo "<br/>";
        $detailsangorder = $detail_order->order;
        $idorder = $detailsangorder['id'];
        $laydulieusender = Order::find($idorder);
        // Order sang sender
        $ordersangsender = $laydulieusender->sender;
        // $name_sender = $ordersangsender['address'];
        // echo $name;
        // 

        return view('admin.order.detail_order', compact('detail_order', 'ordersangsender'));
    }
    function list()
    {

        $id = Auth::user()->id;
        $sender = Sender::where('user_id', $id)->get();
        // print_r($sender);
        // foreach ($sender as $item) {
        //     echo $item->id;
        // }

        $list_act = [
            'all_day' => "Cả ngày",
            'morning_day' => " Sáng (7h30 - 12h00) ",
            'afternoon_day' => " Trưa (13h30 - 18h) ",
            'evening_day' => " Tối (18h30 - 21h00) ",
            'time_in_works' => " Giờ hành chính (7h30 - 11h30; 13h30 - 17h30) ",
            'sunday' => "Ngày chủ nhật",
            'off' => "Ngày lễ"
        ];

        if ($sender->count() === 0) {

            return view('admin.order.order', compact('sender', 'list_act'))->with('message', 'Không có thông tin người gửi');
        } else {

            return view('admin.order.order', compact('sender', 'list_act'));
        }
    }
    function order_excel()
    {
        return view('admin.order.order_excel');
    }
    function ttt(Request $request)
    {
        // //luu nguoi gui truoc bang sender
        $sender_id = $request->input('select_sender');
        // //nguoi nhan receiver -> luu vao bang receiver
        $receiver = new Receiver();
        $name = $request->input('name');
        $phone = $request->input('phone');
        $address = $request->input('address');
        $city = $request->input('city');
        $ward = $request->input('ward');
        $district = $request->input('district');
        $village = $request->input('village');
        // --------------------------- luu 
        $receiver->sender_id = $sender_id;
        $receiver->name = $name;
        $receiver->phone = $phone;
        $receiver->address = $address;
        $receiver->city = $city;
        $receiver->ward = $ward;
        $receiver->district = $district;
        $receiver->village = $village;
        $receiver->save(); // Lưu bản ghi vào cơ sở dữ liệu
        // //cai nay luu vao address_receriver_id
        $detail_order = new Detail_order();
        $receiverId = $receiver->id; // Lấy ID mới của bản ghi
        $detail_order->address_receiver_id = $receiverId;
        $detail_order->address_sender_id = $sender_id;
        //roi luu tiep order

        // ----------------- bang order 
        $detail_id = $detail_order->id;
        $order = new Order();
        $order->user_id = Auth::user()->id;
        $order->sender_id  = $sender_id;
        $order->receiver_id = $receiverId;
        $order->detail_id = $detail_id;
        $order_id = $order->id; //lay id moi khi save

        $order->save();
        // luu thong tin
        $shipmentType = $request->input('shipmentType');
        // echo $shipmentType;
        $product_name = $request->input('product_name');
        // echo $product_name;
        // echo "<br/>";
        $qty = $request->input('qty');
        // echo $qty;
        // echo "<br/>";
        $kg = $request->input('kg');
        // echo $kg;
        // echo "<br/>";
        $price_product = $request->input('price_product');
        // echo $price_product;
        // lay thong tin don hang dac biet ----------------------------------------------------------------
        $selectedSpecialFeatures = $request->input('special_features', []);
        $selectedSpecialFeaturesString = implode(', ', $selectedSpecialFeatures);
        // echo $selectedSpecialFeaturesString;
        // $detail_order = Detail_order::findOrNew(1);
        // $detail_order->special_product = $selectedSpecialFeaturesString;
        // $detail_order->save();
        // lay thong tin size ----------------------------------------------------------------
        $length = $request->input('length');
        $width = $request->input('width');
        $height = $request->input('height');
        $code_order = $request->input('code_order');
        $size =  $length . 'x' . $width . 'x' . $height;

        $payer = $request->input('payer');
        // echo $payer;
        $pick_request = $request->input('pick_request');
        // echo $pick_request;
        $time_ship = $request->input('time_ship');
        // echo $time_ship;
        $detail_order->commod = $shipmentType;
        $detail_order->product_name = $product_name;
        $detail_order->price_product = $price_product;
        $detail_order->qty = $qty;
        $detail_order->kg = $kg;
        $detail_order->special_product = $selectedSpecialFeaturesString;
        $detail_order->size = $size;
        $detail_order->code_order = $code_order;
        $detail_order->payer = $payer;
        $detail_order->pick_request = $pick_request;
        $detail_order->time_ship = $time_ship;
        $detail_order->save();
    }
    function tedsadasst()
    {
        // $order = Order::find(2); // Thay 2 bằng khóa chính của bản ghi trong bảng "order"
        // $detail = Detail_order::find(22);
        // echo "detail_id là " . $detail->id;
        // echo "<br />";

        // $senderData = $order->sender; // Truy cập quan hệ "sender"
        // //tu order sang bang detail_order
        // $ordersangdetail = $order->detail_order;
        // //
        // // if ($ordersangdetail) {
        // //     foreach ($ordersangdetail->toArray() as $key => $value) {
        // //         // foreach ($dacosenderid as $item) {
        // //         echo "order sang detail" . "$key: $value<br>";
        // //         // print_r($item);
        // //         // echo $item;
        // //     }
        // // } else {
        // //     echo "Không có dữ liệu từ bảng 'sender'.";
        // // }
        // $detailsangorder = $detail->order;
        // // print_r($detailsangorder);
        // echo "id là :" . $detailsangorder['id'];
        // echo "<br />";
        // $idorder = $detailsangorder['id'];

        // // $receiver = $detailsangorder['receiver_id']; //khuc nay la co dc id cua sender 
        // // bo zo bang order de lay duoc thong tin cua sender
        // echo 'id lây tu bang order là :' . $idorder; //ok
        // echo "<br />";
        // //buoc nay truy xuat tu bang order 
        // // tim trong bang order
        // $dacosenderidorder = Order::find($idorder);
        // echo "tim trong bang order" . $dacosenderidorder;
        // //tu khuc nay lay du lieu tu bang sender thong qua bang order
        // $ordersangsender = $dacosenderidorder->sender;
        // // echo $ordersangsender;
        // // $test = $dacosenderidorder->sender;
        // // $senderData = $dacosenderidorder->sender;
        // // echo $senderData;
        // // print_r($test);\
        // // echo $test['code_order'];
        // // echo "name ở đây" . $ordersangsender['name'];
        // // if ($ordersangsender) {
        // //     foreach ($ordersangsender->toArray() as $key => $value) {
        // //         // foreach ($dacosenderid as $item) {
        // //         echo "$key: $value<br>";
        // //         // print_r($item);
        // //         // echo $item;
        // //     }
        // // } else {
        // //     echo "Không có dữ liệu từ bảng 'sender'.";
        // // }
        // // foreach ($test as $item) {
        // //     echo $item->name;
        // // }
        // // echo $test->name;
        // // print $test->
        // // echo $dacosenderid;
        // // $name = $dacosenderid->name;
        // // echo $name;
        // // $detailsangoirder = $detail->order;
        // // $detailOrder = Detail_order::find(1); // Thay 1 bằng khóa chính của bản ghi trong bảng "detail_order"

        // // if ($detailOrder) {
        // //     $orderData = $detailOrder->order; // Truy cập quan hệ "order"

        // //     // Bây giờ, bạn có thể sử dụng thông tin từ bảng "order"
        // //     $orderId = $orderData->id;
        // //     $orderName = $orderData->name;
        // //     // ...
        // // } else {
        // //     // Xử lý trường hợp không tìm thấy đối tượng "detail_order"
        // // }
        // // if ($detailsangorder) {
        // //     // Duyệt qua mảng và lấy giá trị của cột "sender_id"
        // //     $senderId = $detailsangorder['sender_id'];

        // //     // In ra giá trị của cột "sender_id"
        // //     echo "sender_id: $senderId";
        // // } else {
        // //     echo "Không có dữ liệu từ bảng 'sender'.";
        // // }
        // // if ($dacosenderid) {
        // //     // foreach ($detailsangorder->toArray() as $key => $value) {
        // //     foreach ($dacosenderid as $item) {
        // //         // echo "$key: $value<br>";
        // //         print_r($item);
        // //         // echo $item;
        // //     }
        // // } else {
        // //     echo "Không có dữ liệu từ bảng 'sender'.";
        // // }

        // // $senderName = $senderData->name;
        // // echo $senderName;
        // // $senderEmail = $senderData->email;
    }
}
