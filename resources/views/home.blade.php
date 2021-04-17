@extends('layouts.main')
@section('title', 'Dashboard Admin');
@section('content')
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                
    <section id="hero-admin">
    <div class="container">
    <div class="row">
        <div class="col-lg-6 pt-5 pt-lg-0 order-2 order-lg-1 d-flex flex-column justify-content-center" data-aos="fade-up">
        <div>
            <h1>Selamat Datang Admin ULT</h1>
            <h2>LEMBAGA LAYANAN PENDIDIKAN TINGGI WILAYAH V Yogyakarta</h2>
        </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left">
        <img src="assets/img/kemendikbudlogo.png" class="img-fluid" alt="Logo Kemendikbud">
        </div>
    </div>
    </div>

    </section><!-- End Hero -->
    <br>
    <br>

    <main id="main">
        <div class="kartu">
            <div class="kartu-container">
                <div class="cards card-1">
                  <div class="kartu-content">
                    <h3><a href="#">Rekap Data</a></h3>
                    <p>Rekap data Harian, Bulanan, Tahunan.</p>
                    <a href="#" class="kartu-btn">Lihat</a>
                  </div>
                  <div class="kartu-tags">
                    <a href="#" class="kartu-btn">Lihat</a>
                  </div>
                </div>
                <div class="cards card-2">
                  <div class="kartu-content">
                    <h3><a href="#">Edit Loket</a></h3>
                    <p>Tambah, Edit, Hapus Loker Pelayanan</p>
                    <a href="#" class="kartu-btn">Lihat</a>
                  </div>
                  <div class="kartu-tags">
                    <a href="#" class="kartu-btn">Lihat</a>
                  </div>
                </div>
            </div>
        </div>
@endsection
