@extends('layouts/app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="content">
                <div class="main-content">
                    <table class="table-content">
                        <tr>
                        <th>{{ trans('message.stt') }}</th>
                        <th>{{ trans('message.tag_name') }}</th>
                        <th>{{ trans('message.action') }}</th>
                        </tr>
                        @foreach ($tags as $value)
                        <tr>
                            <td>{{ $loop->index + 1 }}</td>
                            <td>{{ $value->name }}</td>
                            <td class="btn">
                                <a href="{{ route('tags.edit', $value->id) }}">
                                    <img src="{{ asset('images/edit.png') }}" alt="">
                                </a>
                                <form action="{{ route('tags.destroy', $value->id) }}" method="POST">
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
                    {{ $tags->links() }}
                </div>
            </div>
        </div>
    </div>
@endsection

