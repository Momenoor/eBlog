@extends('layouts.app')
@section('content')
<form action="{{route('tags.store')}}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h2>{{__('create_new_tag')}}</h2>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="mb-10">
                        <label for="name" class="form-label">{{__('name')}}</label>
                        <input name="name" id="name" type="text" class="form-control" value="{{old('name')}}" />
                    </div>
                    <div class="mb-10">
                        <label for="description" class="form-label">{{__('description')}}</label>
                        <textarea name="description" id="description"
                            class="form-control">{{old('description')}}</textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-footer">
            <button type="submit" class="btn btn-primary">{{__('save')}}</button>
            <a href="{{route('tags.index')}}" class="btn btn-light">{{__('cancel')}}</a>
        </div>
    </div>
</form>
@endsection