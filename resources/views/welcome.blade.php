@extends('front.layouts.app')

@section('content')
    
    @include('partials.preloader')

    @include('partials.header')

    @include('partials.modal')

    @include('partials.banner')

    @include('partials.services')

    @include('partials.about')

    @include('partials.clients')
    
    @include('partials.pricing')
    
    @include('partials.footer')
    
@endsection