<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\user;
class logtime extends Model

{

    //use Notifiable;
   use HasFactory;

    protected $table = 'logtime';

     protected $fillable = ['id', 'logintime', 'logouttime', 'user_id'];

     public $timestamps=true;   // default  true or false



    //Eloquent ORM
  public function user()
     {
         return  $this->belongsTo(user::class,'user_id');   // userid is foreign
     }
}
