@extends('layouts.admin')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4>{{ $title }}</h4>
                <div class="card-header-action">
                    <a href="{{ route('admin.transaksi.transaksi_pdf') }}" class="btn btn-primary">
                        Print
                    </a>
                </div>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table align-items-center table-hover" id="table">
                        <thead class="thead-light">
                            <tr>
                                <th>No</th>
                                <th>Nama User</th>
                                <th>Tanggal Bayar</th>
                                <th width="35%">Bukti</th>
                                <th>Status</th>
                                <th width="15%">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($transaksis as $item)
                            <tr>
                                <td></td>
                                <td>{{ $item->nama }}</td>
                                <td>{{ substr($item->created_at,0,10) }}</td>
                                <td><img width="35%" src="{{asset('storage/'.$item->bukti_tf)}}" alt="" srcset=""></td>
                                <td>
                                    {{$item->status}}
                                </td>
                                <td>
                                    @if($item->status == "diproses")
                                    <!-- <a href="{{ route('admin.transaksi.detail',Crypt::encrypt($item->id)) }}" class="btn btn-warning ">Detail</a> -->
                                    <a href="{{ route('admin.transaksi.tolak',Crypt::encrypt($item->id_transaksi)) }}" class="btn btn-danger">Ditolak</a>
                                    <a href="{{ route('admin.transaksi.setuju',Crypt::encrypt($item->id_transaksi)) }}" class="btn btn-success">Setujui</a>
                                    @elseif($item->status == "ditolak")
                                    <a href="{{ route('admin.transaksi.setuju',Crypt::encrypt($item->id_transaksi)) }}" class="btn btn-success">Setujui</a>
                                    @elseif($item->status == "disetujui")
                                    <!-- <a href="{{ route('admin.transaksi.setuju',Crypt::encrypt($item->id_transaksi)) }}" class="btn btn-success">Hujui</a> -->
                                    @endif
                                </td>

                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection