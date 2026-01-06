<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Credenciamento extends Model
{
    use HasFactory;

    protected $table = 'credenciamentos';
    
    public $fillable = ['url', 'filial_id','title'];

    public $timestamps = true;
}
