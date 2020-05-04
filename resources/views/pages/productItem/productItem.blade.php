@extends('layouts.app')

@section('title', '')

@section('content')
    @guest
        @include('layouts.blocks.invite')
    @endguest
    @include('pages.productItem.blocks.breadcrumb')
    @include('pages.productItem.blocks.carousel')
    @include('pages.productItem.blocks.description')
    @include('pages.productItem.blocks.map')
    @include('pages.productItem.blocks.comments')
    @include('layouts.blocks.footer')
@endsection

@section('scripts')
    @include('pages.productItem.scripts')
@endsection
