@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="content">
                <form action="{{ route('tags.store') }}" method="POST" class="main-content-create">
                    @csrf
                    <h2>{{ trans('message.tag_name') }}</h2>
                    <input type="text" placeholder="{{ trans('message.tag_name') }}" name="name">
                    <div class="btn-create">
                        <button type="submit" class="add-btn">{{ trans('message.add') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
