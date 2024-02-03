@extends('layouts.template')

@section('title')
      listings
@endsection

@push('headPages')
        listings
@endpush


@section('content')
    @include('includes.headPages')
    @include('includes.listings')
    @include('includes.testimonials')
    @include('includes.waiting')
 
@endsection