<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $table = 'subjects';

    protected $fillable = [
        'name',
        'course_id',
        'teacher_id',
    ];

    /**
     * Relación con el modelo Course.
     * Una asignatura pertenece a un curso.
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    /**
     * Relación con el modelo User (profesor).
     * Una asignatura puede tener un profesor (opcional).
     */
    public function teacher()
    {
        return $this->belongsTo(User::class, 'teacher_id');
    }
}
