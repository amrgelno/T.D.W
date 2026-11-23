<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class books extends Model

{

    //use Notifiable;
   use HasFactory;

    protected $table = 'books';

     protected $fillable = ['id', 'triptype', 'travelDate', 'ReturnDate', 'hotel_level', 'numbers_of_Travelers','Ways_of_Travel','notes','Transaction_id','Customer_id', 'user_id'];

     public $timestamps=true;   // default  true or false



    //Eloquent ORM
    public function customers()
     {
         return  $this->belongsTo('App\Models\customers','Customer_id');   // userid is foreign
     }


  public function TripPrice()
     {
         return  $this->belongsTo('App\Models\TripPrice','triptype');   // userid is foreign
     }



}
