<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Topic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'subject_id',
        'thumbnail', // Path to thumbnail image

    ];

    // Define the relationship with Subject
    public function subject()
    {
        return $this->belongsTo(Subject::class);
    }

    // Define the relationship with Subtopic
    public function subtopics()
    {
        return $this->hasMany(Subtopic::class);
    }
}

