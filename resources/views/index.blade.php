@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
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
                        @foreach ($items as $item)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->description }}</td>
                            <td>{{ $item->tag->name }}</td>
                            <td class="btn">
                                <a href="{{ route('posts.edit', $item->id) }}">
                                    <img src="{{ asset('images/edit.png') }}" alt="">
                                </a>
                                <form action="{{ route('posts.destroy', $item->id) }}" method="POST">
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
                    {{ $items->links() }}
                </div>
            </div>
            </div>
        </div>
    </div>
@endsection


