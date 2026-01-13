<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Legislacao extends Model
{
    use HasFactory;

    protected $table = 'legislacao';
    public $fillable = ['title', 'url', 'order', 'filial_id'];
    public $timestamps = true;
}
