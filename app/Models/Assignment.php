<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Assignment extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'due_date',
        'subject_id',
    ];

    /**
     * Get the subject that owns the assignment.
     */
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }
}