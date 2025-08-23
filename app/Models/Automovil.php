<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Automovil extends Model
{
    use HasFactory;

    // 👇 Forzar a usar la tabla correcta
    protected $table = 'automoviles';

    protected $fillable = [
        'marca',
        'modelo',
        'anio',
        'patente',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
