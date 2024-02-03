@extends('layouts.template')

@section('title')
     about
@endsection

@push('headPages')
      Aabout
@endpush


@section('content') 
    @include('includes.headPages')
    @include('includes.company')
    @include('includes.ourTeam')
    @include('includes.history')
    @include('includes.waiting')
    
@endsection