<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Teacher;
class TeacherController extends Controller
{
    //
    //
    public function index()
    {
        $teachers = Teacher::all();
        return view ('teachers.index')->with('teachers', $teachers);

        
    }

    
    public function create()
    {
        return view('teachers.create');
    }

   
    public function store(Request $request)
    {
        $input = $request->all();
        Teacher::create($input);
        return redirect('teacher')->with('flash_message', 'Teacher Addedd!');  
    }

    
    public function show($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.show')->with('teachers', $teacher);
    }

    
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        return view('teachers.edit')->with('teachers', $teacher);
    }

  
    public function update(Request $request, $id)
    {
        $teacher = Teacher::find($id);
        $input = $request->all();
        $teacher->update($input);
        return redirect('teacher')->with('flash_message', 'Teacher Updated!');  
    }

   
    public function destroy($id)
    {
        Teacher::destroy($id);
        return redirect('teacher')->with('flash_message', 'Teacher deleted!');  
    }
}
