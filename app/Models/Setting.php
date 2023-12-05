<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Setting extends Model
{
    protected $primarykey="id";
    protected $table = 'settings';
    protected $guarded=[]; 
    public $timestamps=false; 

    use HasFactory;
    
    
    protected $fillable = [
        'site_title',
        'logo',
        'fav_icon',
        'meta_key',
        'meta_description',
        'meta_title',
        'email',
        'phone',
        'address',
        'add_2',
        'add_3',
        'add_4',
        'instagram',
        'twitter',
        'facebook',
        'created_at',
        'updated_at',
    ];

}
