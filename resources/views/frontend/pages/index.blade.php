@extends('frontend.frontend_dashboard')
@section('main')
@section('title')
    Home || Crystalo
@endsection
@include('frontend.home.banner')
@include('frontend.home.about')
@include('frontend.home.working_style')
@include('frontend.home.services')
@include('frontend.home.chooseus')
@include('frontend.home.recent')
@include('frontend.home.working_process')
@include('frontend.home.testimonials')
@include('frontend.home.contact')
@include('frontend.home.blog')
@include('frontend.home.clients')
{{-- @include('frontend.home.instagram') --}}
@endsection
