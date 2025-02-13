<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;

    protected $table = 'courses';

    protected $fillable = [
        'name',
        'description',
    ];

    /**
     * Define the relationship with the User model through the course_user pivot table.
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'course_user');
    }
}
