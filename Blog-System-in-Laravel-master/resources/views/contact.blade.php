@extends('layouts.frontend.app')

@section('title')
Contact Us
@endsection

@push('css')
    <link href="{{ asset('assets/frontend/css/single-post/styles.css') }}" rel="stylesheet">
    <link href="{{ asset('assets/frontend/css/single-post/responsive.css') }}" rel="stylesheet">
    <style>
        .header-bg{
            height: 400px;
            width: 100%;
           
            background-size: cover;
        }
        .favorite_posts{
            color: blue;
        }
    </style>
@endpush

@section('content')
 <section class="">
<h1>Contact Us</h1>
 </section>


@endsection

@push('js')

@endpush