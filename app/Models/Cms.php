<?php

namespace App\Models;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cms extends Model
{
    protected $primarykey="id";
    protected $table = 'cms';
    protected $guarded=[]; 
    public $timestamps=false; 

    use HasFactory;
    
    
}
