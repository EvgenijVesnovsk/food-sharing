@extends('layouts.app')

@section('title', '')

@section('content')
    @guest
        @include('layouts.blocks.invite')
    @endguest
    @include('pages.productsList.blocks.breadcrumb')
    @include('pages.productsList.blocks.paginate')
    @include('pages.productsList.blocks.content')
    @include('pages.productsList.blocks.paginate')
    @include('layouts.blocks.footer')
@endsection
