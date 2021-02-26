<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Outlet extends Model
{
    //menagmbil data dari  table database
    protected $table = 'outlet';
    protected $fillable = ['nama_outlet', 'alamat', 'no_telp', 'email'];
}
