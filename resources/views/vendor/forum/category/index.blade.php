{{-- $category is passed as NULL to the master layout view to prevent it from showing in the breadcrumbs --}}
@extends ('forum::master', ['category' => null])

@section ('content')
    <div class="card-body">

        <h2 class="flex-grow-1">Forum</h2>

        @can ('createCategories')
            <button type="button" class="btn btn-primary float-end" data-open-modal="create-category">
                {{ trans('forum::categories.create') }}
            </button>

            @include ('forum::category.modals.create')
        @endcan
    </div>

    @foreach ($categories as $category)
        @include ('forum::category.partials.list', ['titleClass' => 'lead'])
    @endforeach
@stop
