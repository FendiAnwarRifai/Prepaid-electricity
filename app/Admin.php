<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Admin extends Model
{
    protected $table = 'detail_admin';
    protected $primaryKey = 'id_admin';
    protected $fillable =['id_admin','nama','tanggal_lahir','hp','alamat','gender'];
}
