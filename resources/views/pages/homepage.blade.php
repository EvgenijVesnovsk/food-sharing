@extends('layouts.app')

@section('title', '')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item active" aria-current="page">@lang('homepage.home')</li>
        </ol>
    </nav>

    <div class="paginate-block">
        {{ $cardCategories->links() }}
    </div>

    <div class="row row-cols-1 row-cols-md-3">
        @foreach($cardCategories as $category)
            @include('pages.blocks.cards.item', ['category' => $category])
        @endforeach
    </div>

    <div class="paginate-block">
        {{ $cardCategories->links() }}
    </div>
@endsection
