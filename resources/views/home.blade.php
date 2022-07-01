@extends('layouts.app', ['title' => 'Home Page'])

{{-- @section('content', 'Ini adalah halaman beranda') --}}

@section('content')

    @component('components.alert', ['title' => 'Header component'])
     
    @slot('title')
    Aplikasi <strong>Buku Tamu</strong> Badan Pusat Statistik Kota Malang
    @endslot

    Ini adalah children

    @slot('footer')
    Ini adalah footer
    @endslot

    @endcomponent

    <p>
    Ini adalah halaman beranda  
    </p>  

@endsection
