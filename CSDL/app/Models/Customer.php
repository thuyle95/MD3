<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    //Customer => customers
    //User     => users
    // khai báo tên model không có s -> kết nối với bảng ở csdl có s
    protected $table ="customers";
    protected $primaryKey = 'id';
    //chế độ auto increaments
    //public $incrementing = false; 
    public $timestamps = false;
}
