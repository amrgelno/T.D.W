<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class TripPrice extends Model

{

    //use Notifiable;
   use HasFactory;

    protected $table = 'TripPrice';

     protected $fillable = ['id', 'Total_price', 'Single_Room_cost', 'Duplex_Room_cost', 'Triple_Room_cost', 'costperperson','Transporter_Cost', 'insurance', 'airline', 'visa', 'packages_id', 'Transaction_id', 'user_id'];

     public $timestamps=true;   // default  true or false



         public function TripPrice()
    {
        return $this->hasMany('App\Models\books');
    }


        public function Receipts()
    {
        return $this->hasMany('App\Models\Receipts');   
    }



    //Eloquent ORM
    public function packages()
     {
         return  $this->belongsTo('App\Models\packages','packages_id');   // userid is foreign
     }


}
