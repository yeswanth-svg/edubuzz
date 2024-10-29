<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subtopic extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
        'topic_id',
        'thumbnail', // Path to thumbnail image
    ];

    // Define the relationship with Topic
    public function topic()
    {
        return $this->belongsTo(Topic::class);
    }
}

