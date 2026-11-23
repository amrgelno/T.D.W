<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class selesreps extends Model
{
    // use HasFactory;

    protected $table = 'sales_reps';

    protected $fillable = ['Name', 'phone', 'Address', 'notes','Transaction_id','user_id'];

    public $timestamps = true;   // default  true or false


   public function customers()
    {
        return $this->hasMany('App\Models\customers');
    }


}
