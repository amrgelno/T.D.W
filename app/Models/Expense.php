<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Expense extends Model
{
    // use HasFactory;

    protected $table = 'expenses';

    protected $fillable = ['TITLE', 'Amount', 'Notes','payment_method','via','Transaction_id','user_id'];

    public $timestamps = true;   // default  true or false
}
