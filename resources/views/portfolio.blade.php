@extends('layouts.app')

@section('title', $profile['name'] . ' | ' . $profile['headline'])

@section('content')

    {{-- 1. Hero / Introduction --}}
    @include('partials.hero')

    {{-- 2. About Me & Career Interests --}}
    @include('partials.about')

    {{-- 3. Technical & Professional Skills --}}
    @include('partials.skills')

    {{-- 4. Featured Projects (Foodhub, TaskFlow Pro, AgriConnect, Cafe eCommerce, Furniture) --}}
    @include('partials.projects')

    {{-- 5. Work Experience (Regional Development Bank & Academic Dev) --}}
    @include('partials.experience')

    {{-- 6. Formal Education (HND at SLIATE & A/L Technology) --}}
    @include('partials.education')

    {{-- 7. Academic References (SLIATE Senior Lecturers) --}}
    @include('partials.references')

    {{-- 8. Contact & Direct Reach-out --}}
    @include('partials.contact')

@endsection
