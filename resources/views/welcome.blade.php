@extends('front.layouts.app')

@section('content')
    
    @include('front.partials.preloader')

    @include('front.partials.header')

    @include('front.partials.modal')

    @include('front.partials.banner')

    @include('front.partials.services')

    @include('front.partials.about')

    @include('front.partials.clients')
    
    @include('front.partials.pricing')
    
    @include('front.partials.footer')
    
@endsection