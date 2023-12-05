<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionTwo extends Model
{
    protected $primarykey="id";
    protected $table = 'section_two';
    protected $guarded=[]; 
    public $timestamps=false; 

    use HasFactory;
    
    
}
