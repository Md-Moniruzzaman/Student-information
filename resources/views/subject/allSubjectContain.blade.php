@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-light text-center bg-secondary">All Subjects</div><br>
                    @if(Session::has('message'))
                        <div class="alert alert-success text-center">{{Session::get('message')}}</div>
                    @endif
                    <a href="{{route('/add/subject')}}" title="Add subject info" class="ml-auto"><button class="btn btn-success" >Add Subject</button></a>
                    <div class="card-body">
                        <table class="table table-bordered table-hover">
                            <thead>
                            <th width="10%">SL.</th>
                            <th width="15%"> Subject Name</th>
                            <th width="20%">Action</th>
                            </thead>
                            <tbody>
                            @foreach($allSubjects as $allSubject)
                                <tr>
                                    <td>{{$allSubject->id}}</td>
                                    <td>{{$allSubject->subject}}</td>
                                    <td>
                                        <a href="{{route('/subject/edit/',[$allSubject->id])}}" title="Edit subject info"><button class="btn btn-success" >Edit</button></a>
                                        <a href="{{route('/add/subject')}}" title="Add subject info"><button class="btn btn-secondary" >Add Subject</button></a>
                                        <a href="{{route('/subject/delete/',[$allSubject->id])}}" onclick="return confirm('Are You Sure Want To Delete ?')" title="Delete subject info"><button class="btn btn-danger">Delete</button></a>
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer text-center">{{$allSubjects->links()}}</div>
                </div>
            </div>
        </div>
    </div>

@endsection



