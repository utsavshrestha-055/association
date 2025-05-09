@extends('layouts.client.layout')
@section('content')

       <!-- Carousel Start -->
@include('client.components.home_caraousel')
        <!-- Carousel End -->





        <!-- About Start -->
@include('client.components.about_section')
        <!-- About End -->


        <!-- Services Start -->
@include('client.components.service_section')
        <!-- Services End -->


        <!-- Donation Start -->
@include('client.components.donation_section')
        <!-- Donation End -->


        <!-- Counter Start -->
@include('client.components.counter_section')
        <!-- Counter End -->


        <!-- Causes Start -->
@include('client.components.cause_section')
        <!-- Causes End -->


        <!-- Events Start -->
@include('client.components.event_section')
        <!-- Events End -->

        <!-- Blog Start -->
@include('client.components.blog_section')
        <!-- Blog End -->


        <!-- Gallery Start -->
        @include('client.components.gallery_section')
        <!-- Gallery End -->


        <!-- Volunteers Start -->
@include('client.components.volunteers_section')
        <!-- Volunteers End -->




        <!-- JavaScript Libraries -->
@endsection