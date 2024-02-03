@extends('layouts.template')

@section('title')
    Car Rental
@endsection

@section('content')
    @include('includes.hero')
    @include('includes.works')
    @include('includes.rentCar')
    @include('includes.listings')
    @include('includes.Features')
    @include('includes.testimonials')
    @include('includes.waiting')
  
@endsection