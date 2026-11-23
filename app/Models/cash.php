<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class cash extends model

{

  // use Notifiable;
    use HasFactory;

   // use SoftDeletes;

   //protected $data=['deleted_at'];

    protected $table ='cash';


     protected $fillable = ['id', 'cash_type', 'account_Number', 'First_Balance','Notes','Transaction_id','user_id'];
     public $timestamps=true;   // default  true or false

//Eloquent ORM


//  public function userp()
//      {
//          return  $this->belongsTo(user::class,'users_id');   // userid is foreign
//      }

//     //Eloquent ORM



}
