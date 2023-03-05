<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Student extends Model
{
    use HasFactory;
    protected $table = 'students';
    protected $primaryKey = 'id';
    protected $fillable = ['fullname', 'age', 'mobile'];
    public function teachers(): BelongsToMany
    {
        return $this->belongsToMany(Teacher::class,"courses","teacher_id","student_id");
    }
}
