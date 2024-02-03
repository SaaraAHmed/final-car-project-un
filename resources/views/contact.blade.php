@extends('layouts.template')

@section('title')
     Contact Us
@endsection

@push('headPages')
      Contact Us
@endpush


@section('content')
    
@include('includes.headPages')
    @include('includes.contactUs')
  
@endsection