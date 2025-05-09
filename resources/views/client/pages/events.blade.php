@extends('layouts.client.layout')
@section('content')
        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb" style="background: linear-gradient(rgba(0, 0, 0, 0.6), rgba(0, 0, 0, 0.6)), url('{{ asset('img/client/breadcrumb-bg.jpg') }}');
           ">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h3 class="text-white display-3 mb-4">Upcoming Events</h1>
                <p class="fs-5 text-white mb-4">Help today because tomorrow you may be the one who needs more helping!</p>
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item active text-white">Events</li>
                </ol>
            </div>
        </div>
        <!-- Header End -->

        <!-- Events Start -->
        @include('client.components.event_section')
        <!-- Events End -->



@endsection