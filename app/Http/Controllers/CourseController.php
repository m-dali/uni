<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Course;
use App\Models\Student;
use App\Models\Teacher;
use PhpParser\Node\Stmt\TryCatch;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::all();
        return view ('courses.index')->with('courses', $courses);
        // use Illuminate\Support\Facades\DB;
        //$users = DB::select('select * from users where active = ?', [1]);
 
// return view('user.index', ['users' => $users]);
        
    }

    
    public function create()
    {
        $students = Student::get("id")->pluck("id")->toArray();
        $students_names = Student::get("fullname")->pluck("fullname")->toArray();
        $teachers = Teacher::get("id")->pluck("id")->toArray();
        $teachers_names = Teacher::get("fullname")->pluck("fullname")->toArray();
        return view('courses.create')
            ->with("students",array_combine($students,$students_names))
            ->with("teachers",array_combine($teachers,$teachers_names));
        
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Course::create($input);
        return redirect('course')->with('flash_message', 'Contact Addedd!');  
    }

    
    public function show($id)
    {
        $course = Course::find($id);
        return view('courses.show')->with('courses', $course);
    }

    
    public function edit($id)
    {
        $course = Course::find($id);
        return view('courses.edit')->with('courses', $course);
    }

  
    public function update(Request $request, $id)
    {
        $course = Course::find($id);
        $input = $request->all();
        $course->update($input);
        return redirect('course')->with('flash_message', 'Course Updated!');  
    }

   
    public function destroy($id)
    {
        Course::destroy($id);
        return redirect('course')->with('flash_message', 'Course deleted!');  
    }
}
