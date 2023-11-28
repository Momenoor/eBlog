@extends('layouts.app')
@section('content')
<form action="{{route('media.store')}}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h2>{{__('create_new_media')}}</h2>
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
                        <label for="type" class="form-label fw-bold required">{{__('type')}}</label>
                        <input name="type" id="type" type="text"
                            class="form-control @error('type') is-invalid @enderror" value="{{old('type')}}" />
                        @error('name')
                        <span class="text-danger">{{$errors->first('type')}}</span>
                        @enderror
                    </div>
                    <div class="mb-10">
                        <label for="path" class="form-label fw-bold required">{{__('path')}}</label>
                        <input name="path" id="path" type="text"
                            class="form-control @error('path') is-invalid @enderror" value="{{old('path')}}" />
                        @error('name')
                        <span class="text-danger">{{$errors->first('path')}}</span>
                        @enderror
                    </div>
                    <div class="mb-10">
                        <label for="size" class="form-label fw-bold required">{{__('size')}}</label>
                        <input name="size" id="size" type="text"
                            class="form-control @error('size') is-invalid @enderror" value="{{old('size')}}" />
                        @error('name')
                        <span class="text-danger">{{$errors->first('size')}}</span>
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