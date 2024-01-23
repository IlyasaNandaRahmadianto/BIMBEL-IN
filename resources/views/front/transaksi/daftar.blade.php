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
            <div class="col-xl-6">
                <div class="section_tittle text-center">
                    <h2>Upload Bukti Transfer</h2>
                </div>
            </div>
        </div>
        <form action="{{ route('uploadbukti') }}" method="post" enctype="multipart/form-data" class="col-6 m-auto">
            @csrf
            <div class="form-floating mb-3">
                <label for="float">Tanggal Pembayaran</label>
                <input type="date" name="date" id="float" class="form-control" placeholder="date">
            </div>
            <div class="form-floating mb-3">
                <label for="bukti1">Bukti Pembayaran</label>
                <br>
                <img id="preview" alt="" width="45%">
                <input type="file" name="bukti" id="bukti1" class="form-control">
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary btn-lg">Upload</button>
            </div>
        </form>
    </div>
    </div>
    </div>
</section>
<!--================ End Course Details Area =================-->
<script>
    document.getElementById('bukti1').addEventListener('change', function(event) {
        var input = event.target;
        var preview = document.getElementById('preview');

        var reader = new FileReader();
        reader.onload = function() {
            preview.src = reader.result;
        };

        if (input.files && input.files[0]) {
            reader.readAsDataURL(input.files[0]);
        }
    });
</script>
@endsection