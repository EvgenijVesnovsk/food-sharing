@extends('layouts.app')

@section('title', '')

@section('content')
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="{{route('home')}}">@lang('homepage.home')</a></li>
            <li class="breadcrumb-item active" aria-current="page">{{$category->name}}</li>
        </ol>
    </nav>

    <div class="row row-cols-1 row-cols-md-3">
        @foreach($products as $product)
            @include('pages.blocks.products.item', ['product' => $product])
        @endforeach
    </div>
@endsection
