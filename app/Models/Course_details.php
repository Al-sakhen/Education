<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course_details extends Model
{
    use HasFactory;

    protected $table='course_details';

    protected $fillable = [
        'name',
        'type',
        'file_path',
        'link_text',
        'course_id',
        "created_at",
        "updated_at",
    ];








    public function course()
    {
        return $this->belongsTo(Courses::class, 'course_id','id');
    }

}
