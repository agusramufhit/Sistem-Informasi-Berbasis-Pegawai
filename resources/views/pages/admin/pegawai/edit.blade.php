@extends('layouts.admin')


@section('content')
    <!-- Begin Page Content -->
    <div class="d-sm-flex align-items center justify-content-between mb-4 ml-2">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Pegawai {{ $item->nama}}</h1>
    </div>

    <div class="card card-info card-outline">
    <div class="row">
        <div class="card-body">
            <form action="{{ route('pegawai.update', $item->id)}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <input type="text" value="{{ $item->nama}}" name="nama" class="form-control" placeholder="Nama Pegawai">
                </div>
                <div class="form-group">
                    <select class="form-control select2" style="width: 100;" value="{{ old('jabatan_id')}}" name="jabatan_id">
                        <option disabled value>Pilih Jabatan</option>
                        <option value="{{ old('jabatan_id')}}">{{ $item->jabatan->jabatan}}</option>
                    @foreach ($jab as $item)
                        <option value="{{ $item->id }}">{{ $item->jabatan }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <select class="form-control select2" style="width: 100;" value="{{ old('jeniskelamin_id')}}" name="jeniskelamin_id">
                        <option disabled value>Pilih Jenis Kelamin</option>
                        <option value="{{ old('jeniskelamin_id')}}">{{ $item->jeniskelamin['jeniskelamin'] }}</option>
                    @foreach ($kel as $item)
                        <option value="{{ $item->id }}">{{ $item->jeniskelamin }}</option>
                    @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <textarea name="alamat" value="{{ $item->alamat}}" class="form-control" placeholder="Alamat Pegawai"></textarea>
                </div>
                <div class="form-group">
                    <input type="date" value="{{ $item->tgllhr}}" name="tgllhr" class="form-control">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Ubah Data</button>
                </div>
        </div>
    </div>
</div>
  <!-- /.container-fluid -->
@endsection