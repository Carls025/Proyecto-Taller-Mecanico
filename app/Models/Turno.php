<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Turno extends Model
{
    use HasFactory;

    protected $fillable = [
        'fecha',
        'hora',
        'estado',
        'user_id',
        'automovil_id',
        'servicio_id'
    ];

    

    // Relación con usuario (cliente)
    public function user()
{
    return $this->belongsTo(User::class, 'user_id');
}

    // Relación con automóvil
   public function automovil()
{
    return $this->belongsTo(Automovil::class, 'automovil_id');
}

    // Relación con servicio
    public function servicio()
{
    return $this->belongsTo(Servicio::class, 'servicio_id');
}
}
