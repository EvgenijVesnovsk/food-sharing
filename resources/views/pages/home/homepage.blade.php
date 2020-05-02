@extends('layouts.app')

@section('title', '')

@section('content')
    @include('pages.home.blocks.breadcrumb')
    @include('pages.home.blocks.paginate')
    @include('pages.home.blocks.content')
    @include('pages.home.blocks.paginate')
@endsection
