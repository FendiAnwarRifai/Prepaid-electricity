<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class harga_token extends Model
{
    protected $table = 'harga_token';
    protected $primaryKey = 'id_token';
    protected $fillable =['kode','nominal','harga'];
}
