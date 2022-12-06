<?php

namespace App\Http\Controllers;

use App\Models\Students;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

class StudentsController extends Controller
{
    public function index(){
        
        $data = array("students" => DB::table('students')->orderBy('created_at', 'desc')->simplePaginate(10));

        return view('students.index', $data);
    }

    public function show($id){
        $data = Students::findOrFail($id);
        
        return view('students.edit', ['students' => $data]);
    }

    
    public function create(){
        return view('students.create')->with('title', 'Add New');
    }

    public function store(Request $request){
        $validated = $request->validate([
            "first_name" => ['required', 'min:4'],
            "last_name" => ['required', 'min:4'],
            "gender" => ['required'],
            "age" => ['required'],
            "email" => ['required', 'email', Rule::unique('students', 'email')],
        ]);
        
        Students::create($validated);

        return redirect('/')->with('message', 'New Student was Added Successfully!');
    }

    public function update(Request $request, Students $students){
        $validated = $request->validate([
            "first_name" => ['required', 'min:4'],
            "last_name" => ['required', 'min:4'],
            "gender" => ['required'],
            "age" => ['required'],
            "email" => ['required', 'email'],
        ]);

        $students->update($validated);

        return back()->with('messages', 'Data was successfullu updated');
    }

    public function destroy(Students $students){
   
        $students->delete();
        return redirect('/')->with('messages', 'Data was successfully deleted!');
    }
}
