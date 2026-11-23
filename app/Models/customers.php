<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class customers extends Model

{

    //use Notifiable;
   use HasFactory;

    protected $table = 'customers';

     protected $fillable = ['id', 'Name', 'passport_num', 'phone', 'email', 'Address','classify','status','Client_source','booking_method','notes','Balance','Transaction_id','salesrep_id','user_id'];

     public $timestamps=true;   // default  true or false

      /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */

    //Eloquent ORM
    public function customers()
    {
        return $this->hasOne('App\Models\books')->distinct();
    }


       public function Checks()
    {
        return $this->hasMany('App\Models\Receipts');
    }


 public function Sales_Rep()
     {
         return  $this->belongsTo('App\Models\Sales_Rep','salesrep_id');   // userid is foreign
     }




}
