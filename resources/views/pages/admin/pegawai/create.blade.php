@extends('layouts.admin')


@section('content')
    <!-- Begin Page Content -->
    <div class="d-sm-flex align-items center justify-content-between mb-4 ml-2">
        <h1 class="h3 mb-0 text-gray-800">Tambah Pegawai</h1>
    </div>
    <div class="card card-info card-outline">
    <div class="row">
        <div class="card-body">
            <form action="{{ route('pegawai.store')}}" method="post">
                @csrf
                <div class="form-group">
                    <input type="text" value="{{ old('nama')}}" name="nama" class="form-control" placeholder="Nama Pegawai">
                </div>
                <div class="form-group">
                    <input type="text" value="{{ old('nip')}}" name="nip" class="form-control" placeholder="Nomor Induk Pegawai Masukkan 8 Angka" style="width:400px">
                </div>
                <div class="form-group">
                    <textarea name="alamat" value="{{ old('alamat')}}" class="form-control" placeholder="Alamat Pegawai"></textarea>
                </div>
                <div class="form-group">
                    <input type="date" value="{{ old('tgllhr')}}" name="tgllhr" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Simpan Data</button>
                </div>
        </div>
    </div>
</div>
  <!-- /.container-fluid -->
@endsection