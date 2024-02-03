@extends('layouts.template')

@section('title')
     blog
@endsection

@push('headPages')
       blog
@endpush


@section('content')
    
@include('includes.headPages')
    @include('includes.blog')
    @include('includes.waiting')
   
@endsection