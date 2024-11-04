<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subject extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'grade_id',
        'slug',
    ];

    // Define the relationship with Grade
    public function topics()
    {
        return $this->hasMany(Topic::class);
    }

    public function grade()
    {
        return $this->belongsTo(Grade::class);
    }

   




}


