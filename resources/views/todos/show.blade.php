@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="pb-5 mt-5">{{ $id->title }}</h4>
                <div class="card">
                    <div class="card-header">توضیحات</div>
                    <div class="card-body">
                        {{ $id->description }}
                    </div>
                    <div class="mr-3 mb-3 d-flex">
                        <a class="btn btn-sm btn-dark" href="{{ route('todos.edit', ['id' => $id->id]) }}">
                            ویرایش
                        </a>
                        <form class="mr-3" action="{{ route('todos.delete', ['id' => $id->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <button class="btn btn-danger btn-sm">حذف</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
