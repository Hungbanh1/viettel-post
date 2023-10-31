<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Receiver extends Model
{
    //
    protected $table = 'receivers'; // Đảm bảo tên bảng chính xác

    // public function detailOrders()
    // {
    //     return $this->hasMany(Detail_order::class, 'address_receiver_id', 'id');
    // }
    public function detailOr()
    {
        return $this->hasOne('App\Detail_order', 'address_receiver_id', 'id');
    }
    protected $fillable = [
        'sender_id', // Thêm trường sender_id vào danh sách fillable
        'name',
        'phone',
        'address',
        'city',
        'ward',
        'district',
        'village',
    ];
}
