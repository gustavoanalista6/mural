<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CalendarioEscolar extends Model
{
    use HasFactory, SoftDeletes;

    public $fillable = ['url_pdf', 'filial_id', 'deleted_at'];

    public $timestamps = true;
}
