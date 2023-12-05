<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SectionOne extends Model
{
    protected $primarykey="id";
    protected $table = 'section_one';
    protected $guarded=[]; 
    public $timestamps=false; 

    use HasFactory;
    
    
}
