<div class="card mb-2" style="border-color: #eee;">
    <div class="card-body">
        <div class="mb-2">
            <span class="float-end card-header">
                <a href="{{ Forum::route('thread.show', $post) }}" class="text-muted">#{{ $post->sequence }}</a>
            </span>
            {{ $post->authorName }} <span class="text-muted">{{ $post->posted }}</span>
        </div>
        {!! Str::limit(Forum::render($post->content)) !!}
    </div>
</div>
