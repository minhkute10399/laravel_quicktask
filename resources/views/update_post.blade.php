@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="content">
                <form action="{{ route('posts.update', $item->id) }}" method="POST" class="main-content-create">
                    @csrf
                    @method('PUT')
                    <h2>{{ trans('message.post_name') }}</h2>
                    <input type="text" placeholder="{{ trans('message.post_name') }}" name="name" value="{{ $item->name }}">
                    <h2>{{ trans('message.description') }}</h2>
                    <textarea name="description" id="description" cols="30" rows="10" placeholder="{{ trans('message.description') }}"> {{ $item->description }}</textarea>
                    <h2>{{ trans('message.tag') }}</h2>
                    <div class="select-tag">
                        <select name="tag_id" id="tag_id">
                            @foreach ($tags as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="btn-create">
                        <button  type="submit" class="add-btn">{{ trans('message.update') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

