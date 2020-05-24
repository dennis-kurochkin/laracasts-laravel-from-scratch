@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <h1>Edit Article</h1>

        <form method="POST" action="{{ $article->path() }}">
            @csrf
            @method('PUT')

            <p><input type="text" name="title" placeholder="Title" value="{{ $article->title }}"></p>

            <p><textarea name="excerpt" id="" cols="30" rows="10" placeholder="Excerpt">{{ $article->excerpt }}</textarea></p>

            <p> <textarea name="body" id="" cols="30" rows="10" placeholder="Body">{{ $article->body }}</textarea></p>

            <button type="submit">Send</button>

        </form>
    </div>
</div>
@endsection
