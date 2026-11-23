<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class packages extends Model

{

    //use Notifiable;
   use HasFactory;

    protected $table = 'packages';

     protected $fillable = ['id','package_ID','triptype','Service_level','notes','status','Transaction_id','user_id'];

     public $timestamps=true;   // default  true or false


  //Eloquent ORM
    public function Receipts()
    {
        return $this->hasOne('App\Models\TripPrice');  //id ->packages_id
    }






}
