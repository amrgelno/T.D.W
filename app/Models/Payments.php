<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payments extends Model
{
    // use HasFactory;

    protected $table = 'payments';

    protected $fillable = ['F_Payments','payment_method','notes','via','Receipts_id','Transaction_id','user_id'];

    public $timestamps = true;   // default  true or false
}
