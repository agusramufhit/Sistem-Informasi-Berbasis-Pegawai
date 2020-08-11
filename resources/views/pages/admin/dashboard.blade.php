@extends('layouts.admin')


@section('content')
    <!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="progress-notice alert alert-basic mb-5">
      <div class="row align-items-center">
      <div class="col-lg-6">
      <p class="header text-indigo mt-2"><b>Selamat Datang {{ Auth::user()->name}}</b></p>
      <p class="sub-header mb-2">Kamu bisa menambah dan mencari Informasi Data Pegawai<br> yang ada di Website kami.</p>
      <a href="{{ route('dashboard')}}" class="btn btn-primary font-weight-medium mt-2 mb-3">
      WELCOME
      </a>
      </div>
      <div class="col-lg-6 text-center">
        <img class="icon-one" src="{{ url('frontend/images/hero-icon-3.png')}}" width="350" alt="">
        </div>
      </div>
</div>
  <!-- /.container-fluid -->
@endsection