<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactoModel extends Model
{
    use HasFactory;

    protected $table = 'contacto';

    protected $fillable = [
        'titulo',
        'correo',
        'mensaje',
    ];
}
