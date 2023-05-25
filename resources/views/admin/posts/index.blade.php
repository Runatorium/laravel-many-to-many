@extends('layouts.admin')

@section('content')
    <table class="table">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">titolo</th>
                <th scope="col">name</th>
                <th scope="col">Tecnologie usate</th>
            </tr>
        </thead>
        @foreach ($posts as $post)
            <tr>
                <td scope="row">{{ $post->id }}</td>
                <td scope="row">{{ $post->title }}</td>
                <td colspan="2">{{ $post->type ? $post->type->name : 'nessun tipo' }}</td>
                @foreach ($post->technologies as $technology)
                    <td scope="row">{{ $technology->name }}</td>
                @endforeach ( )




                <td>
                    <a href="{{ route('admin.posts.show', ['post' => $post->id]) }}"><button
                            class="btn btn-primary">vedi</button></a>

                </td>
                <td>
                    <a href="{{ route('admin.posts.edit', ['post' => $post->id]) }}"><button
                            class="btn btn-primary">edita</button></a>

                </td>
                <td>
                    <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-secondary mt-2 w-100">Eliminia</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
