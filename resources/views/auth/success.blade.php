@extends('layouts.success')

@section('title')
    Daftar berhasil - Sekolah Vokasi E-COM
@endsection
<div class="page-content page-success">
    <div class="section-success" data-aos="zoom-in">
      <div class="container">
        <div class="row align-items-center row-login justify-content-center">
          <div class="col-lg-6 text-center">
            <img src="/images/success.svg" alt="" class="mb-4" />
            <h2>Selamat Datang di SV Store</h2>
            <p>
              Anda sudah terdaftar di platform kami.<br />
              Selamat berbelanja:)
            </p>
            <div>
              <a href="/dashboard.html" class="btn btn-success w-50 mt-4">
                My Dashboard
              </a>
              <a href="/index.html" class="btn btn-signup w-50 mt-2">
                Belanja Lagi!!
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@section('content')

@endsection