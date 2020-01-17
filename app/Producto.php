<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $fillable=["pro_nom","pro_sec","pro_pre","pro_fec","pro_ori"];
}
