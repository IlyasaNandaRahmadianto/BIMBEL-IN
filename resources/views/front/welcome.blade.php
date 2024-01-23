<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>BIMBEL-IN</title>
    <link rel="icon" href="{{ asset('frontemplate') }}/img/logo.png">
</head>
@extends('layouts.front')
@section('content')

<!-- banner part start-->
<section class="banner_part">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 col-xl-6">
                <div class="banner_text">
                    <div class="banner_text_iner">
                        <h5>Semua orang bisa belajar</h5>
                        <h1>Belajar Disini Aja</h1>
                        <p>Dengan materi mudah dimengerti dan berbentuk video sehingga membantu proses pembelajaran Anda
                        </p>
                        @if(Auth::user())
                        <a href="{{ route('daftar_bimbel') }}" class="btn_1">Daftar Bimbel </a>
                        @else
                        <a href="{{ route('pendaftaran') }}" class="btn_1">Gabung Kelas </a>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- banner part start-->