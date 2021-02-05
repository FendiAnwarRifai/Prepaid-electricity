<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class detail_transaksi extends Model
{
    protected $table = 'detail_transaksi';
    protected $primaryKey = 'id_transaksi';
    protected $fillable =['id_user','id_token','tanggal_transaksi','kode_transaksi','keterangan'];
}
