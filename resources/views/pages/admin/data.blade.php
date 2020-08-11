@extends('layouts.admin')


@section('content')
    <!-- Begin Page Content -->
    <div class="row">
        @forelse ($datas as $data)
        <!-- FirstColumn -->
        <div class="col-lg-4 col-xlg-3 col-md-5">
            <div class="card">
                <div class="card-block">
                    <center class="card-img"> <img src="{{ url('frontend/images/avatar.png') }}" class="img-circle" width="120" />
                        <h4 class="card-title">{{ Auth::user()->name}}</h4>
                        <h6 class="card-title">{{ Auth::user()->email}}</h6>
                        <h6 class="card-subtitle" align="left"><i class="fas fa-angle-right"></i> No. Handphone {{ $data->no_hp }}</h6>
                        <h6 class="card-subtitle" align="left"><i class="fas fa-angle-right"></i> Jenis Kelamin {{ $data->jeniskelamin->jeniskelamin }}</h6>
                        <h6 class="card-subtitle" align="left"><i class="fas fa-angle-right"></i> Freelancer di Maleo project</h6>
                        <h6 class="card-subtitle" align="left"><i class="fas fa-angle-right"></i> Bekerja sebagai {{ $data->jabatan->jabatan}}</h6>
                        <div class="row text-center justify-content-md-center">
                            <div class="col-4"><i class="far fa-address-card"></i> <font class="font-medium"></font></div>
                        </div>
                    </center>
                </div>
            </div>
        </div>
        <!-- FisrtColumn -->
        <!-- Column -->
        <div class="col-lg-8 col-xlg-9 col-md-7">
            <div class="card">
                <div class="card-block">
                    <form action="{{ route('data.index', $data->id)}}" method="post">
                        <div class="form-group">
                            <label class="col-md-12">Full Name</label>
                            <div class="col-md-12">
                                <th class="border-box">Agus Ramufhit </th>
                                <hr/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <th class="border-box">agusramufhit50@gmail.com</th>
                                <hr/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">No Phone</label>
                            <div class="col-md-12">
                                <th class="border-box">081275079272</th>
                                <hr/>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-md-12">Pesan</label>
                            <div class="col-md-12">
                                <textarea rows="5" class="form-control form-control-line">Ini adalah Halaman Profil Saya</textarea>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="col-sm-12">Negara</label>
                            <div class="col-sm-12">
                                <th class="border-box">Indonesia</th>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <!-- Column -->
        @empty
        <tr>
            <td colspan="7" class="text-center">
                Data Kosong
            </td>
        </tr>
    @endforelse
    </div>
@include('sweetalert::alert')
  <!-- /.container-fluid -->
@endsection