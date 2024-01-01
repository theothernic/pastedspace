@extends('blog')
@section('title', sprintf('Post: %s', $record->title))


@section('content')
    <article class="h-entry hentry">
        <header>
            <h1>{{ $record->title }}</h1>
        </header>
        <div class="body">
            {!! $record->content !!}
        </div>
        <footer>
            <div class="meta">posted on
                <span class="post-date">{{ $record->post_at->format(config('data.post_at.format')) }}</span>
                <a class="permalink" href="{{ route('posts.single', $record->slug) }}"}>#</a>
            </div>
        </footer>
    </article>
@endsection
