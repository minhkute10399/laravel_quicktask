<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Post</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="menu">
                <ul class="list-menu">
                    <li class="li-menu">
                        <a href="{{ route('posts.index') }}">Home</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('posts.create') }}">Create Post</a>
                    </li>
                    <li class="li-menu">
                        <a href="{{ route('tags.index') }}">Tag List</a>
                    </li>
                </ul>
            </div>
            <div class="content">
                <div class="main-content">
                    <table class="table-content">
                        <tr>
                            <th>STT</th>
                            <th>Post Name</th>
                            <th>Description</th>
                            <th>Tag</th>
                            <th>Action</th>
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
                        <div class="paginate">{{ $items->links() }}</div>
                      </table>
                </div>
            </div>
            </div>
        </div>
    </div>
</body>
</html>
