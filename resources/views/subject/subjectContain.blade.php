@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center text-light bg-secondary">Add Subject</div><hr/>
                    @if(Session::has('message'))
                        <div class="alert alert-success text-center">{{Session::get('message')}}</div>
                    @endif
                    <div class="card-body">
                        <form action="{{route('/subject/save')}}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label for="subject" class="col-md-2 col-form-label text-md-right">{{ __('Subject Name') }}</label>

                                <div class="col-md-8">
                                    <input id="subject" type="text" class="form-control @error('subject') is-invalid @enderror" name="subject" value="{{ old('subject') }}" required autocomplete="subject" autofocus>

                                    @error('subject')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-2">
                                    <button type="submit" class="btn btn-dark btn-block">
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
