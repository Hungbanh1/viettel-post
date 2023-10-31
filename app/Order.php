<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable = [
        'user_id', // Thêm trường user_id vào danh sách fillable
        'sender_id',
        'receiver_id',
        'detail_id',
        'date_giao' => 'datetime',
        'date_nhan' => 'datetime'
        // Các trường khác...
    ];
    protected $dates = ['expired_at'];
    public function receiverrr()
    {
        return $this->belongsTo('App\Receiver', 'address_receiver_id', 'id');
    }
    //phu sang chinh
    // public function sender()
    // {
    //     return $this->hasOne(Sender::class, 'id', 'id');
    // }
    public function sender()
    {
        return $this->belongsTo(Sender::class, 'sender_id', 'id');
    }
    // public function sender()
    // {
    //     return $this->hasOne(Detail_order::class, 'id', 'id');
    // }
    public function detail_order()
    {
        return $this->hasOne(Detail_order::class, 'id', 'id');
    }
}
