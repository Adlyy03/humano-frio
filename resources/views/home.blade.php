@extends('layouts.app')

@section('content')
    @include('components.hero')
    @include('components.anggota', ['anggotas' => $anggotas]) {{-- pastikan ini --}}
    @include('components.timeline')
    @include('components.skill')
@endsection
