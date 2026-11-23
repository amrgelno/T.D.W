<?php
namespace App\Models;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User  as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;   //404 page

// class Admin extends Model    /* use Admin Tabel */

class user extends Authenticatable

{

    use Notifiable;
  //  use HasFactory;

    protected $table = 'user';

     protected $fillable = ['id', 'Name', 'email', 'email_verified_at','password', 'user_role','Job_role','user_id', 'remember_token'];

     public $timestamps=true;   // default  true or false


    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];


  public function permissions()
    {
        return $this->hasOne('App\Models\permissions');
    }

 public function logtime()
    {
        return $this->hasOne('App\Models\logtime');
    }

 public function activitylog()
    {
        return $this->hasOne('App\Models\activitylog');
    }



}
