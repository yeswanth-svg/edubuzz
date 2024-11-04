<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grade extends Model
{
    use HasFactory;

    // Specify the fillable fields
    protected $fillable = [
        'name',
        'slug',

    ];

    // Define the relationship with Subject
    public function subjects()
    {
        return $this->hasMany(Subject::class);
    }

}
