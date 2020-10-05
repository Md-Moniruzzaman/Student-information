@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center text-light bg-secondary">Add Result</div><hr/>
                    @if(Session::has('message'))
                        <div class="alert alert-success text-center">{{Session::get('message')}}</div>
                    @endif
                    <div class="card-body">
                        <form action="{{route('/result/save')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="subject" class="col-md-2 col-form-label text-md-right">{{ __('Marks') }}</label>

                                <div class="col-md-8">
                                    <input id="marks" type="text" class="form-control @error('marks') is-invalid @enderror" name="marks" value="{{ old('marks') }}" required autocomplete="marks" autofocus>
                                    <input type="hidden" name="student_id" value="{{$getById->id}}">
                                    @error('marks')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="subject" class="col-md-2 col-form-label text-md-right">{{ __('Subject') }}</label>

                                <div class="col-md-8">
                                    <select class="form-control" name="subject_id">
                                        <option>--Select Subject--</option>
                                        @foreach($allSubject as $subject)
                                        <option value="{{$subject->id}}">{{$subject->subject}}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-success btn-block">
                                        {{ __('Add Subject') }}
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
