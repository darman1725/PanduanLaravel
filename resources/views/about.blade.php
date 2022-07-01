@extends('layouts.app', ['title' => 'About Page'])

{{-- Kalau misalnya ada form html. dipakai ditengah section, tidak boleh didalam skrip --}}
@section('content')
    <h1>About</h1>
    Aplikasi <strong style="color: yellow">Buku Tamu Badan Pusat Statistik Kota Malang</strong> adalah layanan umum yang disediakan untuk memenuhi kebutuhan masyarakat akan data.
@endsection