@extends('layouts.app')
@section('content')
<form action="{{route('articles.store')}}" method="POST">
    @csrf
    <div class="card">
        <div class="card-header">
            <div class="card-title">
                <h2>{{__('create_new_article')}}</h2>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-12">
                    <div class="mb-10">
                        <label for="title" class="form-label fw-bold required">{{__('title')}}</label>
                        <input name="title" id="title" type="text"
                            class="form-control @error('title') is-invalid @enderror" value="{{old('title')}}" />
                        @error('name')
                        <span class="text-danger">{{$errors->first('title')}}</span>
                        @enderror
                    </div>
                    <div class="mb-10">
                        <label for="slug" class="form-label fw-bold required">{{__('slug')}}</label>
                        <input name="slug" id="slug" type="text"
                            class="form-control @error('slug') is-invalid @enderror" value="{{old('slug')}}" />
                        @error('name')
                        <span class="text-danger">{{$errors->first('slug')}}</span>
                        @enderror
                    </div>
                    <div class="mb-10">
                        <label for="body" class="form-label fw-bold required">{{__('body')}}</label>
                        <input name="body" id="body" type="text"
                            class="form-control @error('body') is-invalid @enderror" value="{{old('body')}}" />
                        @error('name')
                        <span class="text-danger">{{$errors->first('body')}}</span>
                        @enderror
                    </div>
                    <div class="mb-10">
                        <label for="status" class="form-label fw-bold required">{{__('status')}}</label>
                        <input name="status" id="status" type="text"
                            class="form-control @error('status') is-invalid @enderror" value="{{old('status')}}" />
                        @error('name')
                        <span class="text-danger">{{$errors->first('status')}}</span>
                        @enderror
                    </div>
                    <div class="mb-10">
                        <label for="is_pinned" class="form-label fw-bold required">{{__('is_pinned')}}</label>
                        <input name="is_pinned" id="is_pinned" type="text"
                            class="form-control @error('is_pinned') is-invalid @enderror"
                            value="{{old('is_pinned')}}" />
                        @error('name')
                        <span class="text-danger">{{$errors->first('is_pinned')}}</span>
                        @enderror
                    </div>
                    <div class="mb-10">
                        <label for="hero_image_id" class="form-label fw-bold required">{{__('hero_image')}}</label>
                        <input name="hero_image_id" id="hero_image_id" type="file"
                            class="form-control @error('hero_image') is-invalid @enderror"
                            value="{{old('hero_image_id')}}" />
                        @error('name')
                        <span class="text-danger">{{$errors->first('hero_image')}}</span>
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