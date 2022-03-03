@extends('blog.home')

@section('content')
<div class="row">
    <h2>{{ $judul }}</h2>
    <div class="col-12">
        {{ $deskripsi }}
        <div class="row">
            <div class="col-3">
                <img src="https://cdn.idntimes.com/content-images/community/2017/05/sabtu-bersama-bapak-9eb09233a12aa0bb44688c8ac92dc461_600x400.jpg" width = 300>
                
                <div class="col-3">
                <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full//92/MTA-3058381/buka-buku_buka-buku-rentang-waktu-buku-novel_full02.jpg" width = 300>

                <div class="col-3">
                <img src="https://www.static-src.com/wcsstore/Indraprastha/images/catalog/full/MTA-3222038/gagas-media_gagas-media-pada-senja-yang-membawamu-pergi-buku-novel--edisi-revisi---free-gelang-etnik_full04.jpg" width = 300>
            </div>
</div>
</div>
@endsection