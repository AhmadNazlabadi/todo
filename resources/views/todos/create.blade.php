@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @include('sections.error')
                <div class="card mt-5">
                    <div class="card-header">ایجاد تسک جدید</div>
                    <div class="card-body">
                        <form action="{{ route('todos.store') }}" method="post">
                            @csrf
                            <div class="form-group">
                                <label for="title">عنوان</label>
                                <input type="text" id="title" name="title" class="form-control @error('title')form-control-invalid @enderror"  value="{{ old('title') }}">
                                @error('title')
                                    <p class="invalid-feedback d-block">
                                        <strong>{{ $message }}</strong>
                                    </p>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="description">توضیحات</label>
                                <textarea id="description" name="description" class="form-control @error('title')form-control-invalid @enderror">{{ old('description') }}</textarea>
                                @error('description')
                                <p class="invalid-feedback d-block">
                                    <strong>{{ $message }}</strong>
                                </p>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-dark">ثبت</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
