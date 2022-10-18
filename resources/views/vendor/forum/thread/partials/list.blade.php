<div class="list-group-item card-header {{ $thread->pinned ? 'pinned' : '' }} {{ $thread->locked ? 'locked' : '' }} {{ $thread->trashed() ? 'deleted' : '' }}" :class="{ 'border-primary': selectedThreads.includes({{ $thread->id }}) }">
    <div class="row align-items-center text-center card-header">
        <div class="col-sm text-md-start">
            <span class="lead" style="margin-left:0px;">
                <a href="{{ Forum::route('thread.show', $thread) }}">{{ $thread->title }}</a>
            </span>
            <br>
            <span style="margin-left:0px;color:antiquewhite;">
            {{ $thread->authorName }}
            </span>
            @if (! isset($category))
                <br>
                <a href="{{ Forum::route('category.show', $thread->category) }}">{{ $thread->category->title }}</a>
            @endif
        </div>
        <div class="col-sm text-md-end">
            @if ($thread->pinned)
                <span class="badge badge-pill badge-info" style="margin-left:0px;">{{ trans('forum::threads.pinned') }}</span>
            @endif
            @if ($thread->locked)
                <span class="badge badge-pill badge-warning" style="margin-left:0px;">{{ trans('forum::threads.locked') }}</span>
            @endif
            @if ($thread->userReadStatus !== null && ! $thread->trashed())
                <span class="badge badge-pill badge-success" style="margin-left:0px;">{{ trans($thread->userReadStatus) }}</span>
            @endif
            @if ($thread->trashed())
                <span class="badge badge-pill badge-danger" style="margin-left:0px;">{{ trans('forum::general.deleted') }}</span>
            @endif
            <span class="badge badge-pill badge-primary" @if (isset($category))style="background: {{ $category->color }}; margin-left:0px;"@endif>
                {{ trans('forum::general.replies') }}:
                {{ $thread->reply_count }}
            </span>
        </div>

        @if ($thread->lastPost)
            <div class="col-sm text-md-end text-muted">
                <a href="{{ Forum::route('thread.show', $thread->lastPost) }}">{{ trans('forum::posts.view') }} &raquo;</a>
                <br>
                {{ $thread->lastPost->authorName }}
                <span class="text-muted" style="margin-left:0px;">@include ('forum::partials.timestamp', ['carbon' => $thread->lastPost->created_at])</span>
            </div>
        @endif
    </div>
</div>
