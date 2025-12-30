<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Legislacao extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'legislacao';
    public $fillable = ['titulo', 'url_pdf', 'filial_id', 'deleted_at'];
    public $timestamps = true;

       protected $hidden = ['deleted_at'];
}
