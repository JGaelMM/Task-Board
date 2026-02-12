@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

    @include('components.navbar')
    @include('components.filters')
    @include('components.board')
    @include('components.modal')

@endsection
