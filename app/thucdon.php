<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class thucdon extends Model
{
    //Tạo liên kết tới bản quảng cáo
    protected $table="thucdon";
    //tắt bật chế độ tự động quản lý 'created' và 'update at'
    public $timestamps=false;
}
