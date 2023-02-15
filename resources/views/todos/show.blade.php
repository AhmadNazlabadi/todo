@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h4 class="pb-5 mt-5">{{ $id->title }}</h4>
                <div class="card">
                    <div class="card-header">توضیحات</div>
                    <div class="card-body">
                        {{ $id->description; }}
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
