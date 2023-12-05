<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $primarykey="id";
    protected $table = 'about_gallery';
    protected $guarded=[]; 
    public $timestamps=false; 

    use HasFactory;
}
