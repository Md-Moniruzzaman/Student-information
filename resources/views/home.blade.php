@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header text-light text-center bg-secondary">All Student Information</div><br>
                @if(Session::has('message'))
                    <div class="alert alert-success text-center">{{Session::get('message')}}</div>
                @endif
                <hr/>
                <a href="{{route('/add/student/')}}" class="ml-auto"><button class="btn btn-info">Add Student</button></a>

                <div class="card-body">
                     <table class="table table-bordered table-hover">
                         <thead>
                         <th width="5%">SL.</th>
                         <th width="15%">Name</th>
                         <th width="15%">Class</th>
                         <th width="10%">Roll</th>
                         <th width="35%">Action</th>
                         </thead>
                         <tbody>
                            @foreach($students as $student)
                                <tr>
                                    <td>{{$student->id}}</td>
                                    <td>{{$student->name}}</td>
                                    <td>{{$student->class}}</td>
                                    <td>{{$student->roll}}</td>
                                    <td>
                                        <a href="{{route('/student/edit/',[$student->id])}}" title="Edit Student info"><button class="btn btn-primary" >Edit</button></a>
                                        <a href="{{route('/student/view/',[$student->id])}}" title="View Student info"><button class="btn btn-info" >View</button></a>

                                        <a href="{{route('/student/delete/',[$student->id])}}" onclick="return confirm('Are You Sure Want To Delete ?')" title="Delete Student info"><button class="btn btn-danger">Delete</button></a>
                                        <a href="{{route('/add/result/',[$student->id])}}" title="Add Student Result"><button class="btn btn-secondary">Add Result</button></a>
                                        <a href="{{route('/view/result/',[$student->id])}}" title="View Student Result"><button class="btn btn-success">View Result</button></a>
                                    </td>
                                </tr>
                            @endforeach
                         </tbody>
                     </table>
                </div>
                <div class="card-footer text-center">{{$students->links()}}</div>
            </div>
        </div>
    </div>
</div>

@endsection
