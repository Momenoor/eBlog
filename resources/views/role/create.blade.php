@extends('layouts.app')
@section('content')
<form action="{{route('role.store')}}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h2>{{__('create_new_role')}}</h2>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="mb-10">
                        <label for="name" class="form-label fw-bold required">{{__('name')}}</label>
                        <input name="name" id="name" type="text"
                            class="form-control @error('name') is-invalid @enderror" value="{{old('name')}}" />
                        @error('name')
                        <span class="text-danger">{{$errors->first('name')}}</span>
                        @enderror
                    </div>
                    <div class="mb-10">
                        <label for="description" class="form-label fw-bold">{{__('description')}}</label>
                        <textarea name="description" id="description"
                            class="form-control @error('description') is-invalid @enderror">{{old('description')}}</textarea>
                        @error('name')
                        <span class="text-danger">{{$errors->first('description')}}</span>
                        @enderror
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <button type="submit" class="btn btn-primary me-1">{{__('save')}}</button>
            <a href="{{route('role.index')}}" class="btn btn-dark btn-active-dark text-white">{{__('cancel')}}</a>
        </div>
    </div>
</form>
@endsection