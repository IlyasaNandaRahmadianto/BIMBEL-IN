@extends('layouts.front')

@section('content')
<div class="container mt-5 pt-3 pb-3 mb-3">
    <div class="row mt-5">
        <div class="col-md-6 mx-auto">
            <div class="text-center p-3">
                <h3>Daftar Bimbel</h3>
            </div>
            <div class="card-body">
                <form class="row" action="{{route('front.pendaftaran.simpan')}}" enctype="form-data" method="post">
                    @csrf

                    <div class="form-group col-md-6">
                        <label for="nama">Nama Lengkap</label>
                        <input id="nama" type="text" class="form-control @error('nama') is-invalid @enderror" name="nama" value="{{ old('nama') }}" required autocomplete="nama" autofocus>

                        @error('nama')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="date" name="tgl_lahir" id="date" class="form-control @error('tgl_lahir') is-invalid @enderror" style="width: 100%; display: inline;" onchange="invoicedue(event);" required value="{{ old('tgl_lahir') }}">
                        @error('tgl_lahir')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-6">
                        <label for="email">Email</label>
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" required autocomplete="email">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="password">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="password">

                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="no_hp">Nomor HP</label>
                        <input id="no_hp" type="text" class="form-control @error('no_hp') is-invalid @enderror" name="no_hp" required autocomplete="no_hp">

                        @error('no_hp')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-6">
                        <label for="nama_ortu">Nama Orang tua/Wali</label>
                        <input id="nama_ortu" type="text" class="form-control" name="nama_ortu" required autocomplete="nama_ortu">

                        @error('nama_ortu')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                    <div class="form-group col-md-12">
                        <label for="alamat">Alamat Rumah</label>
                        <textarea id="alamat" class="form-control" name="alamat" required autocomplete="alamat"></textarea>

                        @error('alamat')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>

            </div>
            <div class="text-center">
                <button type="submit" class="btn_4 py-2 btn-block">
                    Daftar
                </button>
                <p class="mt-3 btn_4_custom">Mari bergabung bersama Bimbel BIMBEL-IN</p>
            </div>
            </form>
        </div>

    </div>

</div>
@endsection