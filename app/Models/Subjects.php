<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Subjects extends Model
{
    use HasFactory;
    protected $table = 'subjects';
    public $timestamps = false;



    protected $fillable = [
        'name',
        'type',
        'course_id'
    ];


    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id','id');
    }
}
