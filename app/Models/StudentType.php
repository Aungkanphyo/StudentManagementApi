<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentType extends Model
{
    use HasFactory;
    protected $tablename = "student_types";
    protected $primaryKey = "student_type";
    protected $fillable = ['student_type', 'desc'];

    //student_type is used as a foreign key in the student table
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
