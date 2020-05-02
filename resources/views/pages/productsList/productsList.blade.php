@extends('layouts.app')

@section('title', '')

@section('content')
    @include('pages.productsList.blocks.breadcrumb')
    @include('pages.productsList.blocks.paginate')
    @include('pages.productsList.blocks.content')
    @include('pages.productsList.blocks.paginate')
@endsection
