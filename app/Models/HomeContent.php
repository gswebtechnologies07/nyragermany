<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomeContent extends Model
{
    protected $primarykey="id";
    protected $table = 'home_content';
    protected $guarded=[]; 
    public $timestamps=false; 

    use HasFactory;
    
    
}
