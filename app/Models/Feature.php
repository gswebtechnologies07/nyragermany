<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Feature extends Authenticatable
{
    protected $primarykey="id";
    protected $table = 'features';
    protected $guarded=[]; 
    public $timestamps=false; 
 
    use HasFactory;
   
   public function products()
    {
        return $this->belongsToMany(Product :: class);
    }
}
