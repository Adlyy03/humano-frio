@extends('layouts.app')


@section('title', 'Home - Landing Page')

@section('content')
    @include('components.hero')
    @include('components.anggota')
    @include('components.timeline')
    @include('components.skill')
@endsection
