@extends('home.layouts.app')

@section('content')
    <main>
        <section id="home">
            @include('home.components.home') {{-- Banner principal --}}
        </section>

        <section id="clients">
            {{--        @include('home.components.clients') {{-- As feature in -}}--}}
        </section>

        <section id="products">
            @include('home.components.products') {{-- Finances --}}
        </section>

        <section id="about">
            @include('home.components.about') {{-- Numbers --}}
        </section>

        <section id="for-you">
            @include('home.components.for-you') {{-- Products --}}
        </section>

        <section id="how-to">
{{--            @include('home.components.how-to') {{-- Step by Step --}}
        </section>

        <section id="testimonials">
{{--            @include('home.components.testimonials') {{-- Testimonials -}}--}}
        </section>

        <section id="contact">
            @include('home.components.contato') {{-- Contact Section --}}
        </section>

        <section id="community">
{{--            @include('home.components.community') {{-- Community Section --}}
        </section>

        <section id="explore">
{{--            @include('home.components.explore') {{-- Start using --}}
        </section>
    </main>
@endsection
