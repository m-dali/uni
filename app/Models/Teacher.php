<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    
    protected $table = 'teachers';
    protected $primaryKey = 'id';
    protected $fillable = ['fullname', 'department', 'mobile'];
    public function students(){
        return $this->belongsToMany(Student::class,"courses","student_id","teacher_id");
    }
}
