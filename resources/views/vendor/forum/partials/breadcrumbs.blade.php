<nav aria-label="breadcrumb">
         <button type="button" class="btn btn-primary"><a href="{{ url(config('forum.web.router.prefix')) }}">BACK TO FORUM</a></button>
        @if (isset($category) && $category)
            @include ('forum::partials.breadcrumb-categories', ['category' => $category])
        @endif
        @if (isset($thread) && $thread)
            <a href="{{ Forum::route('thread.show', $thread) }}">{{ $thread->title }}</a>
        @endif

</nav>
