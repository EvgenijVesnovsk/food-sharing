@extends('layouts.app')

@section('title', '')

@section('content')
    @include('profiles.blocks.breadcrumb')
    @include('profiles.blocks.navigation')
    @include('profiles.blocks.paginate')
    @include('profiles.blocks.cards.index')
    @include('profiles.blocks.paginate')
@endsection
