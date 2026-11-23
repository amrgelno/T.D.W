<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Model;

class CGReceipts extends model

{

  // use Notifiable;
    use HasFactory;

   // use SoftDeletes;

   //protected $data=['deleted_at'];

    protected $table ='receipts';

     protected $fillable = ['Check_Number', 'Check_date','Amount','payment_method','Receipt_Source','via','status','classify','Transaction_id','user_id','Customer_id','salesreps_id','staff_id','packages_id','Bank_cash_id'];
     public $timestamps=true;   // default  true or false

//Eloquent ORM


//  public function userp()
//      {
//          return  $this->belongsTo(user::class,'users_id');   // userid is foreign
//      }

//     //Eloquent ORM



  //Eloquent ORM
    public function Receipts()
     {
         return  $this->belongsTo('App\Models\TripPrice','packages_id');   // packages_id is foreign
     }






  public function customers()
     {
         return  $this->belongsTo('App\Models\customers','Customer_id');   // Customer_id is foreign
     }



}
