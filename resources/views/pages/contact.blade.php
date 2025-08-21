@extends('layouts.app')

@section('title', 'Contact Us')

@section('content')
    <section class="contact">
        <h1>Hubungi Kami</h1>
        <form action="" method="POST">
            @csrf
            <input type="text" name="nama" placeholder="Nama">
            <input type="email" name="email" placeholder="Email">
            <textarea name="pesan" placeholder="Pesan"></textarea>
            <button type="submit">Kirim</button>
        </form>
    </section>
@endsection
