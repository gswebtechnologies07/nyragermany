<?php
namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pharma extends Model
{
    protected $primarykey="id";
    protected $table = 'pharma';
    protected $guarded=[]; 
    public $timestamps=false; 
    use HasFactory;
}
