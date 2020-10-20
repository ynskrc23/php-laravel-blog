<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class login extends Model
{
    protected $table ='tbl_login';
    protected $primaryKey = 'login_id';
    protected $fillable = ['login_isim','login_email','login_sifre'];
}
