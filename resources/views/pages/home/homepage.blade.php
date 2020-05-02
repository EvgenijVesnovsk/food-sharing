@extends('layouts.app')

@section('title', '')

@section('content')
    @guest
        @include('layouts.blocks.invite')
    @endguest
    @include('pages.home.blocks.breadcrumb')
    @include('pages.home.blocks.paginate')
    @include('pages.home.blocks.content')
    @include('pages.home.blocks.paginate')
    @include('layouts.blocks.footer')
@endsection
