@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>New Article</h1>

        <form method="POST" action="{{ route('articles.store') }}">
            @csrf

            <p>
                <input
                    type="text"
                    name="title"
                    class="input @error('title') has-error @enderror"
                    placeholder="Title"
                    value="{{ old('title') }}">
            </p>
            @error('title')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <p>
                <textarea
                    name="excerpt"
                    id="" cols="30" rows="10"
                    class="input @error('excerpt') has-error @enderror"
                    placeholder="Excerpt">{{ old('excerpt') }}</textarea>
            </p>
            @error('excerpt')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <p>
                <textarea
                    name="body"
                    id="" cols="30" rows="10"
                    class="input @error('body') has-error @enderror"
                    placeholder="Body">{{ old('body') }}</textarea>
            </p>
            @error('body')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <p>Tags<br>
                <select name="tags[]" multiple>
                    @foreach($tags as $tag)
                        <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                    @endforeach
                </select>
            </p>
            @error('tags')
                <div class="alert alert-danger">{{ $message }}</div>
            @enderror

            <button type="submit">Send</button>

        </form>
    </div>
</div>
@endsection
