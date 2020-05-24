@extends('layout')

@section('content')
<div id="wrapper">
    <div id="page" class="container">
        <div id="content">
            <div class="title">
                <h2>Our articles</h2>
                <span class="byline">Mauris vulputate dolor sit amet nibh</span>
            </div>
            <ul class="style1">
                @forelse($articles as $article)
                    <li class="first">
                        <a href="{{ route('articles.show', $article) }}">
                            <h3>{{ $article->title }}</h3>
                            <p>{!! $article->excerpt !!}</p>
                        </a>
                        <p><strong>Author:</strong> {{ $article->author->name }}</p>
                        <p><strong>Tags:</strong>
                            @foreach($article->tags as $tag)
                                <a href="{{ route('articles.index', ['tag' => $tag->name]) }}">{{ $tag->name }}</a>
                            @endforeach
                        </p>
                    </li>
                @empty
                    <p>No articles yet</p>
                @endforelse
            </ul>
        </div>
    </div>
</div>
@endsection
