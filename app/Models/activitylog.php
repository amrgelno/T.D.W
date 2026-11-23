<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class activitylog extends Model

{

    //use Notifiable;
   use HasFactory;

    protected $table = 'activitylog';

     protected $fillable = ['id','Transaction_id', 'Transaction_Type', 'user_id'];

     public $timestamps=true;   // default  true or false



    //Eloquent ORM
  public function user()
     {
         return  $this->belongsTo('App\Models\user','user_id');   // userid is foreign
     }
}
