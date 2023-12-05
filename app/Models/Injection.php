<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Injection extends Model
{
    protected $primarykey="id";
    protected $table = 'inject_eyedrops';
    protected $guarded=[]; 
    public $timestamps=false; 
    use HasFactory;
}
