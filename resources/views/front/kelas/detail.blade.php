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
        <div class="row">
            <div class="col-lg-8 course_details_left">
                <div class="main_image">
                    </div>
                    <div class="content_wrapper">
                        <img src="frontemplate/img/advance_feature_img.png" width="300" alt="">
                        <h4 class="title_top">{{ $kelas->name_kelas }}</h4>
                        <div class="content">
                            {!! $kelas->description_kelas !!}
                        </div>
                        <div class="text-center">

                            <img src="{{asset('frontemplate/img/geografi.jpg')}}" class="img_fluid" alt="" width="50%">
                        </div>
                </div>
            </div>

            <div class="col-lg-4 right-contents">
                <div class="sidebar_top">
                    <h4 class="title">Daftar Materi</h4>
                    <div class="content">
                        <ul class="course_list">
                            @if(Auth::user())
                                @if ($materi!='[]') 
                                @foreach ($materi as $item)
                                    <li class="justify-content-between align-items-center d-flex">
                                        <a href="#">{{ $item->judul_materi }}</a>
                                    </li>
                                    @endforeach
                                @else
                                <li
                                    class="justify-content-between align-items-center d-flex">
                                    <p>Belum Ada Materi</p>
                                    </li>
                                    
                                @endif
                            @else
                            <div class="text-center">
                                <p>Login terlebih dahulu sebelum mengakses kelas</p>
                                <a href="{{route('login')}}" class="btn btn-lg btn-primary rounded-2">Login</a>
                            </div>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
            <!-- <div class="col-lg-4 right-contents">
                <div class="sidebar_top">
                    <ul>
                        <li>
                            <a class="justify-content-between d-flex" href="#">
                                <p>Kelas</p>
                                <span class="color">{{ $kelas->name_kelas }}</span>
                            </a>
                        </li>
                        <li>
                            
                        </li>
                    </ul>
                </div>
            </div> -->
        </div>
    </div>
</section>
<!--================ End Course Details Area =================-->
@endsection