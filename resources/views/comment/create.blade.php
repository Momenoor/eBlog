@extends('layouts.app')
@section('content')
<form action="{{route('comments.store')}}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h2>{{__('create_new_comment')}}</h2>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="mb-10">
                        <label for="body" class="form-label fw-bold required">{{__('body')}}</label>
                        <input name="body" id="body" type="text"
                            class="form-control @error('body') is-invalid @enderror" value="{{old('body')}}" />
                        @error('name')
                        <span class="text-danger">{{$errors->first('body')}}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary me-1">{{__('save')}}</button>
            <a href="{{route('tags.index')}}" class="btn btn-dark btn-active-dark text-white">{{__('cancel')}}</a>
        </div>
    </div>
</form>
@endsection