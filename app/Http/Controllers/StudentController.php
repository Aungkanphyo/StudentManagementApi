<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentRequest;
use App\Http\Resources\StudentResource;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $studentList = Student::paginate();
        $paginateData = StudentResource::collection($studentList);
        return $paginateData;
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StudentRequest $request)
    {
        $studentInfo = Student::create($request->validated());
        return response()->json(['data' => $studentInfo, 'message' => 'Student information insert successful.']);
    }

    /**
     * Display the specified resource.
     */
    public function show(Student $student)
    {
        return new StudentResource($student);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Student $student)
    {
        $student->update([
            'name' => $request->name,
            'email' => $request->email,
            'date_of_birth' => $request->date_of_birth,
            'student_type' => $request->student_type,
            'card_number' => $request->card_number,
        ]);
        return response()->json(['data' => $student, 'message' => 'Student data update successful.']);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Student $student)
    {
        $student->delete();
        return response()->json(['message' => 'Student delete successful']);
    }
}
