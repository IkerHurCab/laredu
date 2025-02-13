<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Submission extends Model
{
    use HasFactory;

    protected $table = 'submissions';

    protected $fillable = [
        'user_id',
        'assignment_id',
        'submitted_at',
        'grade',
    ];

    /**
     * Relación con el modelo User (Estudiante).
     * Una entrega pertenece a un usuario (estudiante).
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Relación con el modelo Assignment (Tarea).
     * Una entrega pertenece a una tarea.
     */
    public function assignment()
    {
        return $this->belongsTo(Assignment::class);
    }
}
