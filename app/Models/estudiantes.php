<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class estudiantes extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $table = "estudiantes";
    protected $fillable = ['id', 'nombre', 'correo', 'telefono', 'created_at', 'updated_at'];
}
