@extends('layouts.front')
@section('content')
{{-- <section class="breadcrumb breadcrumb_bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_iner text-center">
                    <div class="breadcrumb_iner_item">
                        <h2>Course Details</h2>
                        <p>Home<span>/</span>Course Details</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> --}}
<!-- breadcrumb start-->

<!--================ Start Course Details Area =================-->
<section class="course_details_area section_padding">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5">
                <div class="section_tittle text-center">
                    <h2>Riwayat Transaksi</h2>
                </div>
            </div>
        </div>
        @if($transaksi)
        <div class="text-center table-responsive">
            <table class=" table table-hover">
                <thead>
                    <tr>
                        <td width=5%>No</td>
                        <td>Tanggal</td>
                        <td>Jumlah</td>
                        <td>Status</td>
                    </tr>
                </thead>
                <tbody>

                    @foreach($transaksi as $item)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->jumlah }}</td>
                        <td>{{ $item->status }}</td>
                    </tr>
                    <!-- {{$i++}} -->
                    @endforeach
                </tbody>

            </table>
        </div>
        @else
        <h1>Tidak ada riwayat transaksi</h1>
        @endif
    </div>
    </div>
</section>
<!--================ End Course Details Area =================-->
@endsection