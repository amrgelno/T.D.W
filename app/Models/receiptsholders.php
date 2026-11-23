<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class receiptsholders extends Model
{
    // use HasFactory;

    protected $table = 'receiptsholders';

    protected $fillable = ['id','Name','Receipt_holders_No', 'user_id', 'created_at', 'updated_at'];

    public $timestamps = true;   // default  true or false


       public function receiptsholders()
    {
        return $this->hasMany('App\Models\Receipts');
    }


}
