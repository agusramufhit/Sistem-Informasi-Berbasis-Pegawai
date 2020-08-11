@extends('layouts.admin')


@section('content')
    <!-- Begin Page Content -->
    @forelse ($datas as $data)
    <div class="d-sm-flex align-items center justify-content-between mb-4 ml-2">
        <h1 class="h3 mb-0 text-gray-800">Ubah Data Admin {{ $data->user->name}}</h1>
    </div>

    <div class="card card-info card-outline">
    <div class="row">
        <div class="card-body">
            <form action="{{ route('data.update', $data->id)}}" method="post">
                @method('PUT')
                @csrf
                <div class="form-group">
                    <input type="text" value="{{ old('name_id', $data->user->name )}}" name="name_id" placeholder="Nama" class="form-control" style="width:400px">
                </div>
                <div class="form-group">
                    <input type="text" value="{{ old('alamat_id', $data->alamat_id )}}" name="alamat_id" placeholder="Alamat" class="form-control" style="width:400px">
                </div>
                <div class="form-group">
                    <input type="text" value="{{ old('no_hp', $data->no_hp )}}" name="no_hp" class="form-control" placeholder="Nomor Handphone" style="width:400px">
                </div>
                <div class="form-group">
                    <input type="text" value="{{ old('ktp', $data->ktp )}}" name="ktp" class="form-control" placeholder="Nomor KTP" style="width:400px">
                </div>
                <div class="form-group">
                    <input type="text" value="{{ old('bank', $data->bank )}}" name="bank" class="form-control" placeholder="Bank" style="width:300px">
                </div>
                <div class="form-group">
                    <input type="text" value="{{ old('nomor_rek', $data->nomor_rek )}}" name="nomor_rek" class="form-control" placeholder="Nomor Rekening" style="width:400px">
                </div>
                <div class="form-group">
                    <input type="text" value="{{ old('akunbank', $data->akunbank )}}" name="akunbank" class="form-control" placeholder="Nama Akun Bank" style="width:400px">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Ubah Data</button>
                </div>
        </div>
    </div>
</div>
@empty
                <tr>
                    <td colspan="7" class="text-center">
                        Data Kosong
                    </td>
                </tr>
            @endforelse
  <!-- /.container-fluid -->
@endsection