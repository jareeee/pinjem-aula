@extends('layout.layout')

@section('content')
  <div class="aula-foto">
    <img src="https://www.sedesbedono.sch.id/f1l3/aula1.jpg" class="img-fluid openingImage rounded mx-auto d-block" alt="">
    <div class="textSide">
      <p>Pinjem aula adalah sebuah website peminjaman aula yang menyediakan banyak fasilitas secara gratis dengan cara reservasi di website ini </p>
    </div>
  </div>
  
  <div class="abu-bg"></div>
  <div class="about container">
    <img src="img/aula-foto.jpg"" class="foto-about">
    <div class="what">
      <h4 class="what-title">Apa itu Pinjem Aula?</h4>
      <p  class="what-text">Peminajaman aula adalah situs yang di peruntukan untuk memudahkan siswa meminjam aula sekolah sesuai kebutuhan, kami juga menyidiakan fitur waktu agar siswa  mengetauhi waktu mana yang sudah di pesan oleh siswa lain.</p>
    </div>
  </div>

  <div id="layanan" class="container layanan ">
  <h1 class="fw-bold">From Our Service</h1 class="fw-bold">
  
    {{-- 1 --}}
  <div class="row align-items-center mb-5 our-service">
        <div class="col">
          <img class="w-80 position-relative layanan-img-kanan me-5" src="img/ac.png" alt="...">
        </div> 
        <div class="col">
          <p class="layanan-text">Kami memberikan kenyamanan ruangan yang sejuk dengan banyaknya penyejuk ruangan.</p>
        </div>
  </div>

  {{-- 2 --}}
  <div class="row align-items-center mb-5 our-service flex-row-reverse">
        <div class="col">
          <img class="w-80 position-relative layanan-img-kanan ms-5" src="img/kursi.png" alt="...">
        </div> 
        <div class="col">
          <p class="layanan-text">Kami memberikan fasillitas ruangan yang luas dengan ruang dalam yang besar dan halaman yang luas.</p>
        </div>
  </div>

  {{-- 3 --}}
  <div class="row align-items-center mb-5 our-service">
        <div class="col">
          <img class="w-80 position-relative layanan-img-kanan  me-5" src="img/kursi-putih.png" alt="...">
        </div> 
        <div class="col">
          <p class="layanan-text">Kami memberikan fassilitas pendukung untuk tamu berupa meja dan kursi.</p>
        </div>
  </div>

  {{-- 4 --}}
  <div class="row align-items-center mb-5 our-service flex-row-reverse">
        <div class="col">
          <img class="w-80 position-relative layanan-img-kanan  ms-5" src="img/panggung.png" alt="...">
        </div> 
        <div class="col">
          <p class="layanan-text">Kami memberikan fasilitas panggung yang  luas dan tinggi.</p>
        </div>
  </div>

  {{-- 5 --}}
  <div class="row align-items-center mb-5 our-service">
        <div class="col">
          <img class="w-80 position-relative layanan-img-kanan  me-5" src="img/speaker.png" alt="...">
        </div> 
        <div class="col">
          <p class="layanan-text">Kami memberikan fassilitas pendukung untuk pemilik acara berupa speaker dan mic.</p>
        </div>
  </div>
</div>

<footer>
  <div class="container">

    <div class="row align-items-start justify-content-evenly">

      <div class="col-4">
        <h2>Pinjem Aula</h2>
        <p>SMKN 26 Jakarta</p>
      </div>

      <div class="col-4">
        <h2>Follow Us</h2>

        <div class="sosmed">
          <a href="https://www.instagram.com/jarrreeee_/" class="d-flex flex-row align-items-center">
            <img src="img/ig-icon.png" alt="">
            <p>Instagram</p>
          </a>
        </div>

        <div class="sosmed">
          <a href="/" class="d-flex flex-row align-items-center">
            <img src="img/twit-icon.png" alt="">
            <p>Twitter</p>
          </a>
        </div>

        <div class="sosmed">
          <a href="/" class="d-flex flex-row align-items-center">
            <img src="img/mail-icon.png" alt="">
            <p>Email</p>
          </a>
        </div>

        </div>
      </div>

    </div>

  </div>
</footer>

@endsection
