<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StudentCard extends Model
{
    use HasFactory;
    protected $tablename = "student_cards";
    protected $primaryKey = "student_id";
    protected $fillable = ['card_number'];

    //card_number is used as a foreign key in the student table
    public function student()
    {
        return $this->belongsTo(Student::class);
    }
}
