@extends('layouts.app')

@section('title', '')

@section('content')
    @include('profiles.blocks.breadcrumb')
    @include('profiles.blocks.navigation')
    @include('profiles.blocks.cards.create')
@endsection
