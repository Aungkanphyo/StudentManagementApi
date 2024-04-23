<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Student extends Model
{
    use HasFactory;
    protected $tablename = "students";
    protected $primaryKey = "student_id";
    protected $fillable = ['name', 'email', 'date_of_birth', 'student_type', 'card_number'];

    // It is a function that says that a student will have only one student card
    public function studentCard(): HasOne
    {
        return $this->hasOne(StudentCard::class);
    }

    //It is a function that says that each student has only one type
    public function studentType(): HasOne
    {
        return $this->hasOne(StudentType::class);
    }
}
