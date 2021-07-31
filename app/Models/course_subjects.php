<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class course_subjects extends Model
{
    use HasFactory;
    protected $table='course_subjects';

    protected $fillable = [
        
    ];








    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id','id');
    }
}


