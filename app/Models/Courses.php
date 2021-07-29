<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Courses extends Model
{
    use HasFactory;

    protected $table = 'courses';



    protected $fillable = [
        'name',
        'description',
        'image',
        'year_id',
        "created_at",
        "updated_at",
    ];




    public function post()
{
    return $this->belongsTo(Years::class, 'year_id' , 'id');
}


    public function subject(){
        return $this->hasMany(Subjects::class, 'course_id', 'id');
    }




}
