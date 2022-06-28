<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class products extends Model
{
    //
public $timestamps = false; //timesatampを利用しない
protected $fillable = ['id', 'company_id', 'product_name','price', 'stock', 'comment', 'img_path', 'created_at', 'updated_at'];
}
