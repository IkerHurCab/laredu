<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    protected $table = 'grades';

    protected $fillable = [
        // Aquí irían los campos relevantes de la tabla `grades`, como:
        // 'score',
        // 'subject_id',
        // 'user_id',
    ];

    /**
     * Relación con el modelo Subject.
     * Un grade puede estar asociado a una asignatura.
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    /**
     * Relación con el modelo User.
     * Un grade puede estar asociado a un usuario (estudiante).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
