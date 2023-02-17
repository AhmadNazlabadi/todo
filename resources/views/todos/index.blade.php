@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="d-flex justify-content-between align-item-center my-3">
                    <h4>سیستم مدیریت تسک ها</h4>
                    <a class='btn btn-dark' href="{{ route('todos.create') }}">ایجاد تسک جدید</a>
                </div>
                <div class="card">
                    <div class="card-header">تسک ها</div>
                    <div class="card-body">
                        <ul class="list-group">
                            @foreach($todos as $item)
                                <li class="list-group-item d-flex justify-content-between">
                                    {{ $item->title }}
                                    <div>
                                        <a class='btn btn-dark' href="{{ route('todos.show', ['id' => $item->id]) }}">
                                            نمایش
                                        </a>
                                        @if($item->is_completed == 0)
                                            <a class='btn btn-outline-primary' href="{{ route('todos.complete', ['id' => $item->id]) }}">
                                                انجام شد
                                            </a>
                                        @endif
                                    </div>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                    <div class="d-flex justify-content-center">{{ $todos->links() }}</div>
                </div>
            </div>
        </div>
    </div>
@endsection
