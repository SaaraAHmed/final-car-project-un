@extends('layouts.template')

@section('title')
    404 page
@endsection

@push('head')
    404 Error
@endpush

@section('content')
    @include('includes.headPages')
    @include('includes.404')
@endsection