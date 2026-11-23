<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class permissions extends model

{

  // use Notifiable;
    use HasFactory;

   // use SoftDeletes;

   //protected $data=['deleted_at'];

    protected $table ='permissions';

     protected $fillable = ['id', 'create', 'read', 'update', 'Delete','user_id'];

     public $timestamps=true;   // default  true or false

//Eloquent ORM


//  public function userp()
//      {
//          return  $this->belongsTo(user::class,'users_id');   // userid is foreign
//      }

//     //Eloquent ORM
  public function user()
     {
         return  $this->belongsTo('App\Models\user','user_id');   // userid is foreign
     }


}
