@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header text-center text-light bg-secondary">Add Student</div>
                    <div class="card-body">
                         <form>
                             <div class="form-group">
                                 <label>Name</label>
                                 <input type="text" name="name" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label>Class</label>
                                 <input type="number" name="class" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label>Roll</label>
                                 <input type="number" name="roll" class="form-control">
                             </div>
                             <div class="form-group">
                                 <label></label>
                                 <button type="submit"  class="btn btn-secondary btn-block">Submit</button>
                             </div>
                         </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
