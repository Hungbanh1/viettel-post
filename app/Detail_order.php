<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Detail_order extends Model
{
    //
    protected $table = 'detail_orders'; // Đảm bảo tên bảng chính xác
    protected $fillable = [

        'address_receiver_id',
        'address_sender_id',
        'commod',
        'product_name',
        'date_giao' => 'datetime',
        'date_nhan' => 'datetime'
        // Các trường khác...
    ];
    protected $dates = ['date_giao', 'date_nhan'];
    public function receiverrr()
    {
        return $this->belongsTo('App\Receiver', 'address_receiver_id', 'id');
    }
    public function order()
    {
        //tu bang detail_order(key) sang order (phụ) 
        return $this->hasOne(Order::class, 'detail_id', 'id');
    }
}
