<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Subject;
use App\Mark;
use App\Student;

class SubjectController extends Controller
{
    public function index(){
        return view('subject.subjectContain');
    }
    public function store(Request $request){
        $this->validate($request,[
            'subject'=>'required'
        ]);
        Subject::create([
            'subject'=> request('subject')
        ]);
        return redirect('/all/subject')->with('message','Subject Added Successfully');
    }
    public function allSubject(){
        $allSubjects = Subject::paginate(10);
        return view('subject.allSubjectContain',compact('allSubjects'));
    }
    public function editSuject($id){
        $editById = Subject::find($id);
        return view('subject.editSubjectContain',compact('editById'));
    }

    public function updateSubject(Request $request){
        $updateById = Subject::find($request->id);
        $updateById->subject = $request->subject;
        $updateById->save();
        return redirect('/all/subject')->with('message','Subject updated Successfully');
    }
    public function deleteSubject($id){
        $deleteById = Subject::find($id);
        $deleteById->delete();
        return redirect('/all/subject')->with('message','Subject deleted Successfully');
    }

    public function addResult(Request $request){
        $this->validate($request,[
            'marks'=>'required',
            'student_id'=>'required',
            'subject_id'=>'required',
        ]);
        Mark::create([
            'marks'=> request('marks'),
            'student_id'=> request('student_id'),
            'subject_id'=> request('subject_id'),
        ]);
        return redirect('/')->with('message','Result added Successfully');
    }
}
