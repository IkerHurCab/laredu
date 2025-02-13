<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Notification extends Model
{
    use HasFactory;

    protected $table = 'notifications';

    protected $fillable = [
        'user_id',
        'type',
        'data',
        'is_read',
    ];

    /**
     * Relación con el modelo User.
     * Una notificación pertenece a un usuario (el que recibe la notificación).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Accesor para obtener los datos en formato JSON de forma más conveniente.
     * Retorna los datos de la notificación como un array.
     */
    public function getDataAttribute($value)
    {
        return json_decode($value, true);
    }

    /**
     * Mutador para guardar los datos como JSON en la base de datos.
     * Convierte el array a JSON antes de guardarlo.
     */
    public function setDataAttribute($value)
    {
        $this->attributes['data'] = json_encode($value);
    }
}
