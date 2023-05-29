@vite(['resources/css/app.css', 'resources/js/app.js'])

@extends('layouts.admin')

@section('content')
    <form method="POST" action="{{ route('admin.posts.store') }}">

        @csrf
        {{-- working on image upload later --}}
        <div class="mb-3">
            <label for="thumb" class="form-label">Url dell'immagine</label>
            <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb" name="thumb"
                value="{{ old('thumb') }}">
            @error('thumb')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="title" class="form-label">Titolo</label>
            <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                value="{{ old('title') }}">
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>

        <div class="mb-3">
            <label for="type_id" class="form-label">Categoria</label>
            <select class="form-select" name="type_id" id="type_id">
                <option @selected(old('type_id') == '') value="">nessuna categoria</option>
                @foreach ($types as $type)
                    <option @selected(old('type_id') == $type->id) value="{{ $type->id }}">{{ $type->name }}</option>
                @endforeach

            </select>

            @error('type_id')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">
            <label for="content" class="form-label">Post Content</label>
            <textarea type="text" class="form-control @error('content') is-invalid @enderror" id="content" name="content">{{ old('content') }}</textarea>
            @error('content')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <div class="mb-3">

            @foreach ($technologies as $technology)
                <input type="checkbox" id="technology_{{ $technology->id }}" name="technologies[]"
                    value="{{ $technology->id }}">
                <label for="technology_{{ $technology->id }}">{{ $technology->name }}</label>
                <br>
            @endforeach
            @error('technologies')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror
        </div>


        <button type="submit" class="btn btn-primary">Salva</button>
    </form>
@endsection

</div>
