@extends('layout')

@section('content')
    


<link rel="stylesheet" href="{{asset('assets/index.css')}}">

<!-- hero content  -->

@include('partials._hero')

{{-- why us --}}

@include('partials._whyus')

<!-- Service section -->

@include('partials._service')


<!-- grooming and pricing -->


@include('partials._pricing')


<!-- testimonies -->

@include('partials._testimonies')

@endsection