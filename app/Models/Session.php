<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'note'];

    public function classRoutine()
    {
        return $this->hasMany(ClassRoutine::class);
    }

    public function exams()
    {
        return $this->hasMany(Exam::class);
    }
}
