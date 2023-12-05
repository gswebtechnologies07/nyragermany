<?php

namespace App\Models;
use Illuminate\Support\Str;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductEnquiry extends Model
{
    protected $primarykey="id";
    protected $table = 'product_enquiries';
    protected $guarded=[]; 
    public $timestamps=false; 

    use HasFactory;
    
    
}
