<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserAddress extends Model
{
     protected $fillable = [
        'province',
        'city',
        'district',
        'address',
        'zip',
        'contact_name',
        'contact_phone',
        'last_used_at',
    ];

    //返回日期类型 Carbon 对象
    protected $dates = ['last_used_at'];

    //模型关联
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    //获取完整地址信息
    public function getFullAddressAttribute()
    {
        return "{$this->province}{$this->city}{$this->district}{$this->address}";
    }
}
