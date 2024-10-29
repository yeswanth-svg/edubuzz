<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Worksheet extends Model
{
    //
    // Define the fillable fields
    protected $fillable = [
        'subtopic_id',
        'name',
        'slug',
        'description',
        'thumbnail',
        'file_path',
    ];

    /**
     * Relationship to the Subtopic model
     * Each worksheet belongs to a single subtopic
     */
    public function subtopic()
    {
        return $this->belongsTo(Subtopic::class);
    }
}
