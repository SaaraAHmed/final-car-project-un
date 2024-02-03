@extends('layouts.template')

@section('title')
     testimonials
@endsection

@push('headPages')
       testimonials
@endpush


@section('content')
    
@include('includes.headPages')
    @include('includes.testimonials')
    @include('includes.waiting')

@endsection