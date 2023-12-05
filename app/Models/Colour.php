<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Colour extends Authenticatable
{
    protected $primarykey="id";
    protected $table = 'colours';
    protected $guarded=[]; 
    public $timestamps=false; 
 
    use HasFactory;
   
   public function products()
    {
        return $this->belongsToMany(Product :: class);
    }
}
