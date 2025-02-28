<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'image', 'duration', 'level', 'description', 'user_id', 'exercises'];
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function exercises()
    {
        return $this->belongsToMany(Exercise::class, 'workout_exercises');
    }
}
