@extends('master')

@section('header')
  <nav>
    <ul class="nav nav-pills pull-right">
      <li role="presentation" class="active"><a href="/">Home</a></li>
      <li role="presentation"><a href="/mapel">Mata Pelajaran</a></li>
      <li role="presentation"><a href="#">TO</a></li>
      <li role="presentation"><a href="/login">Login</a></li>
    </ul>
  </nav>
  <h3 class="text-muted">ABUNSMA</h3>
@stop

@section('sidebar-up')
  <h1>Aplikasi Belajar UN SMA</h1>
  <p class="lead">Selamat datang di ABUNSMA! Disini teman-teman semua bisa belajar, latihan soal, sampai TO loh. Penasaran? Yuk langsung tengok!</p>
@stop

@section('sidebar-left')
  
  <input type="image" class="img-circle img-responsive img-center" src="https://1.bp.blogspot.com/-eRBVipAhYiw/WRndFbivgQI/AAAAAAAAAQQ/Bmv6_qACLpwzNqIvqykeVMvgwi_ijwWgQCLcB/s1600/math.jpg" width="200px" height="200px" alt="">
  <h4>Matematika</h4>

  <img class="img-circle img-responsive img-center" src="https://4.bp.blogspot.com/-hGgjimFyjxE/WRndA3aQS_I/AAAAAAAAAQI/NR7VnYJJtHIjFYTrXGtheHNxsoZanuaXwCLcB/s1600/fis.jpg" width="200px" height="200px" alt="">
  <h4>Fisika</h4>
  <p>...</p>

  <h4>Kimia</h4>
  <p>...</p>
@stop
@section('sidebar-right')
  <h4>Biologi</h4>
  <p>...</p>

  <h4>Bahasa Indonesia</h4>
  <p>...</p>

  <h4>Bahasa Inggris</h4>
  <p>...</p>
@stop
@section('footer')
  <p>&copy; 2017 Aplikasi Belajar UN SMA</p>
@stop
