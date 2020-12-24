<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <title>{{ trans('message.post') }}</title>
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
                        <a href="{{ route('posts.create') }}">{{ trans('message.create_post') }}</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('tags.index') }}">{{ trans('message.tag_list') }}</a>
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
                <div class="main-content">
                    <table class="table-content">
                        <tr>
                          <th>{{ trans('message.stt') }}</th>
                          <th>{{ trans('message.post_name') }}</th>
                          <th>{{ trans('message.description') }}</th>
                          <th>{{ trans('message.tag') }}</th>
                          <th>{{ trans('message.action') }}</th>
                        </tr>
                        @foreach ($items as $value)
                        <tr>
                            <td>{{ $loop->index }}</td>
                            <td>{{ $value->name }}</td>
                            <td>{{ $value->description }}</td>
                            <td>{{ $value->tag->name }}</td>
                            <td class="btn">
                                <a href="{{ route('posts.edit', $value->id) }}">
                                    <img src="{{ asset('images/edit.png') }}" alt="">
                                </a>
                                <form action="{{ route('posts.destroy', $value->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                        <button type="submit" class="btn-delete" onclick="return confirm('Want to delete ??')">
                                            <img src="{{ asset('images/trash.png') }}" alt="">
                                        </button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                      </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
