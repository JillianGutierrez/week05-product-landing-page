@extends('layouts.app')

@section('title', 'Coffee Break By: Maus Foodhouse atbp.')

@section('content')

    <x-navbar />

    <main class="pt-20">

        <x-hero />

        <x-features />

        <x-menu />

        <x-pricing />

        <x-testimonials />

        <x-cta />

    </main>

    <x-footer />

@endsection