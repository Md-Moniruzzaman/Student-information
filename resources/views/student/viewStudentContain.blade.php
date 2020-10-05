@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 offset-2">
                <div class="card">
                    <div class="card-header text-center text-light bg-secondary">Student Details</div>
                <div class="card-body">
                    <p><b>Name:</b>&nbsp;{{$viewStudent->name}}</p>
                    <p><b>Roll:</b>&nbsp;{{$viewStudent->roll}}</p>
                    <p><b>Class:</b>&nbsp;{{$viewStudent->class}}</p>
                </div>
                </div>
            </div>
        </div>
    </div>
@endsection
