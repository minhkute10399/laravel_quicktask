<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>{{ trans('message.create_tag') }}</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="menu">
                <ul class="list-menu">
                    <li class="li-menu">
                        <a href="{{ route('posts.index') }}">{{ trans('message.home') }}</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('tags.index') }}">{{ trans('message.tag_list') }}</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('tags.index') }}">{{ trans('message.create_tag') }}</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('change-languages', ['language' => 'en']) }}">{{ trans('message.english') }}</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('change-languages', ['language' => 'vi']) }}">{{ trans('message.vietnam') }}</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <form action="{{ route('tags.update', $item->id) }}" method="POST" class="main-content-create">
                    @csrf
                    @method('PUT')
                    <h2>{{ trans('message.tag_name') }}</h2>
                    <input type="text" placeholder="{{ trans('message.tag_name') }}" name="name" value="{{ $item->name }}">
                    <div class="btn-create">
                        <button  type="submit">{{ trans('message.add') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
