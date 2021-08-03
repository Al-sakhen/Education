<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Years extends Model
{
    use HasFactory;

    protected $table = 'years';
    public $timestamps = false;



    protected $fillable = [
        'name',
    ];


    
public function course(){
    return $this->hasMany(Courses::class, 'year_id', 'id');
}


}
