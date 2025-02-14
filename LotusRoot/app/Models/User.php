<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class User extends Model {
    // 資料表名稱
    protected $table = 'users';
    // 主鍵名稱
    protected $primaryKey = 'id';
    // 使用者只能輸入這些欄位
    //email
    //password
    //type
    //name
    //phone_number
    protected $fillable = [
        "email",
        "password",
        "name",
        "phone_number",
    ];
}