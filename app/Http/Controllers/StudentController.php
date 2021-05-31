<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;

class StudentController extends Controller
{


    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $students = Student::all();

        return view('student', ['students' => $students, 'layout' => 'index']);
    }

    public function create()
    {
        $students = Student::all();
        return view('student', ['students' => $students, 'layout' => 'create']);
    }

    public function store(Request $request)
    {
        $student = new Student();
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->age = $request->input('age');
        $student->groupId = $request->input('groupId');
        $student->save();
        return redirect('/student');
    }


    public function show($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('student', ['students' => $students, 'student' => $student, 'layout' => 'show']);

    }


    public function edit($id)
    {
        $student = Student::find($id);
        $students = Student::all();
        return view('student', ['students' => $students, 'student' => $student, 'layout' => 'edit']);

    }


    public function update(Request $request, $id)
    {
        $student = Student::find($id);
        $student->firstName = $request->input('firstName');
        $student->lastName = $request->input('lastName');
        $student->age = $request->input('age');
        $student->groupId = $request->input('groupId');
        $student->save();
        return redirect('/student');
    }

    public function destroy($id)
    {
        $student = Student::find($id);
        $student->delete();
        return redirect('/student');
    }
}
