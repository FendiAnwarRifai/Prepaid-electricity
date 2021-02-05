<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    protected $table = 'token';
    protected $primaryKey = 'id_transaksi';
    protected $fillable =['id_transaksi','id_user','kode_token'];
}
