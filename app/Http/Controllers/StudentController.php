<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;
use App\Student;
use App\Subject;
use App\Vue;
use DB;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index(){
        return view('student.addContain');
    }
    public function store(Request $request){
        $this->validate($request,[
            'name'=>'required',
            'class'=>'required',
            'roll'=>'required',
        ]);

        $studentRoll = Student::where('roll',$request->roll)->first();
        if ($studentRoll==true){
            return redirect('/add/student/')->with('message','Student Record Already Exist');
        }else {
            Student::create([
                'name' => request('name'),
                'class' => request('class'),
                'roll' => request('roll'),
            ]);
            return redirect('/')->with('message', 'Student Added Successfully');
        }
    }
    public function viewStudent($id){
        $viewStudent = Student::find($id);
        return view('student.viewStudentContain',compact('viewStudent'));
    }

    public function edit($id){
        $editById = Student::find($id);
        return view('student.editContain',compact('editById'));
    }
    public function update(Request $request){
        $updateById = Student::where('id',$request->id)->first();
        $updateById->name = $request->name;
        $updateById->class = $request->class;
        $updateById->roll = $request->roll;
        $updateById->save();
        return redirect('/')->with('message','Student Update Successfully');
    }
    public function delete($id){
        $deleteById = Student::find($id);
        $deleteById->delete();
        return redirect('/')->with('message','Student Info Delete Successfully');
    }
    public function mark($id){
        $getById = Student::find($id);
        $allSubject = Subject::all();
        return view('student.addResultContain',compact('getById','allSubject'));
    }
    public function viewResult($id){
        $viewResultByIds= DB::table('marks')
                        ->join('students','marks.student_id','=','students.id')
                        ->join('subjects','marks.subject_id','=','subjects.id')
                        ->select('marks.*','students.name','students.roll','students.class','subjects.subject')
                        ->where('students.id',$id)
                        ->get();
        $getById = Student::find($id);
            return view('student.resultContain',compact('viewResultByIds','getById'));


    }
}
