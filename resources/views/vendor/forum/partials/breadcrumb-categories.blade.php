@if ($category->parent !== null)
    @include ('forum::partials.breadcrumb-categories', ['category' => $category->parent])
@endif
@if (isset($post) && $post)
<a class="float-right" href="{{ Forum::route('category.show', $category) }}"> <button type="button" class="btn btn-primary">BACK TO THREAD</button></a>
@endif
