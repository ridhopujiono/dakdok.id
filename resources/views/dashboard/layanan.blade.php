<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,,maximum-scale=1.0, minimum-scale=1.0;">
    <meta name="csrf_token" content="{{csrf_token()}}">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('dashboard/css/style_layanan.css')}}">
    <title>Daftar Layanan</title>
</head>
<body class="main-page">

    <!-- Modal -->
    <div class="modal fade-scale" id="modal_konfirmasi" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
          <div class="modal-body text-center">
            <p>Anda akan memilih <span class="jenis_order fw-bold"></span> ?</p>
            <form action="{{url('form')}}" method="POST">
                @csrf
                <input type="text" class="d-none" name="jenis_order" value="">
                <input type="text" class="d-none" name="judul_pekerjaan" value="">
          </div>
            <div class="container-fluid mb-3">
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <button type="submit" class="btn btn-primary" style="box-shadow: 2px 2px 4px #e4e4e4">Iya</button>
                    <button type="button" class="btn btn-light ml-2" data-bs-dismiss="modal" style="box-shadow: 2px 2px 4px #e4e4e4">Tidak</button>

                    </form>
                    
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Akhir Modal -->
    <section class="box web-view ">
        <header>
            <div class="header-left">
                <div class="left-area">
                    <img class="logo" src="{{asset('dashboard/assets/img/logo.svg')}}" alt="Logo">
                    <p class="logo-text">Daftar Layanan<br>Tukang dan Service</p>
                </div>
            </div>

            <div class="header-right">
                <div class="right-area">  
                    Silahkan Anda pilih layanan Anda butuhkan. Kami akan datang ke rumah Anda 
                    untuk memberikan layanan / service sesuai kebutuhan Anda.
                </div>
            </div>
        </header>

        <div class="service">
            
            <div class="service-area">
                
                <div class="service-box">
                    <div class="service-card">
                        <img class="service-icon" src="{{asset('dashboard/assets/img/icon-01.svg')}}" alt="Logo">
                        <div class="service-name">Renovasi Skala Kecil</div>
                    </div>
                    <div class="service-list">
                        <a class="service-list-a" href="#" data-href="Perbaikan Atap Bocor">Perbaikan Atap Bocor</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan / Pasang Plafond">Perbaikan / Pasang Plafond</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan / Pasang Kramik">Perbaikan / Pasang Kramik</a><br>

                        <a class="service-list-a" href="#" data-href="Perbaikan Pagar Dinding">Perbaikan Pagar Dinding</a><br>
                        
                        <a class="service-list-a" href="#" data-href="Perbaikan lainya">Perbaikan Lainya</a><br>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-card">
                        <img class="service-icon" src="{{asset('dashboard/assets/img/icon-02.svg')}}" alt="Logo">
                        <div class="service-name">Pekerjaan Pengecatan</div>
                    </div>
                    <div class="service-list">
                        <a class="service-list-a" href="#" data-href="Pengecatan Pagar">Pengecatan Pagar</a><br>
                        <a class="service-list-a" href="#" data-href="Pengecatan Pintu / Kusen">Pengecatan Pintu / Kusen</a><br>
                        <a class="service-list-a" href="#" data-href="Pengecatan Dinding Rumah">Pengecatan Dinding Rumah</a><br>
                        <a class="service-list-a" href="#" data-href="Kaligrafi Mural Dinding">Kaligrafi Mural Dinding</a><br>
                        <a class="service-list-a" href="#" data-href="Pengecatan Lainya">Pengecatan Lainya</a><br>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-card">
                        <img class="service-icon" src="{{asset('dashboard/assets/img/icon-03.svg')}}" alt="Logo">
                        <div class="service-name">Perbaikan CCTV</div>
                    </div>
                    <div class="service-list">
                        <a class="service-list-a" href="#" data-href="Perbaikan Instalasi Kabel">Perbaikan Instalasi Kabel</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Kamera Rusak">Perbaikan Kamera Rusak</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Koneksi Online">Perbaikan Koneksi Online</a><br>
                        <a class="service-list-a" href="#" data-href="Pemasangan CCTV Baru">Pemasangan CCTV Baru</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Lainya">Perbaikan Lainya</a><br>
                    </div>
                </div>

            </div>

            <div class="service-area">
                
                <div class="service-box">
                    <div class="service-card">
                        <img class="service-icon" src="{{asset('dashboard/assets/img/icon-04.svg')}}" alt="Logo">
                        <div class="service-name">Perbaikan Kelistrikan</div>
                    </div>
                    <div class="service-list">
                        <a class="service-list-a" href="#" data-href="Bongkar Pasang Meteran">Bongkar Pasang Meteran</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Konsleting">Perbaikan Konsleting</a><br>
                        <a class="service-list-a" href="#" data-href="Pemasangan Lampu">Pemasangan Lampu</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Saklar">Perbaikan Saklar</a><br>
                        
                        <a class="service-list-a" href="#" data-href="Perbaikan Lainya">Perbaikan Lainya</a><br>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-card">
                        <img class="service-icon" src="{{asset('dashboard/assets/img/icon-05.svg')}}" alt="Logo">
                        <div class="service-name">Perbaikan Sanitair</div>
                    </div>
                    <div class="service-list">
                        <a class="service-list-a" href="#" data-href="Perbaikan Kran Bocor">Perbaikan Kran Bocor</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Wastafel">Perbaikan Wastafel</a><br>
                        <a class="service-list-a" href="#" data-href="Instalasi Pipa Saluran Air">Instalasi Pipa Saluran Air</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Pipa Tersumbat">Perbaikan Pipa Tersumbat</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Lainya">Perbaikan Lainya</a><br>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-card">
                        <img class="service-icon" src="{{asset('dashboard/assets/img/icon-06.svg')}}" alt="Logo">
                        <div class="service-name">Perbaikan Kursi / Sofa</div>
                    </div>
                    <div class="service-list">
                        <a class="service-list-a" href="#" data-href="Perbaikan Kerangka">Perbaikan Kerangka</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Plitur Kursi">Perbaikan Plitur Kursi</a><br>
                        
                        <a class="service-list-a" href="#" data-href="Penggantian Spon dan Cover">Penggantian Spon dan Cover</a><br>

                        <a class="service-list-a" href="#" data-href="Perbaikan Kursi Total">Perbaikan Kursi Total</a><br>

                        <a class="service-list-a" href="#" data-href="Perbaikan Lainya">Perbaikan Lainya</a><br>
                    </div>
                </div>
            </div>

            <div class="service-area">
                
                <div class="service-box">
                    <div class="service-card">
                        <img class="service-icon" src="{{asset('dashboard/assets/img/icon-07.svg')}}" alt="Logo">
                        <div class="service-name">Service Elektronik</div>
                    </div>
                    <div class="service-list">
                        <a class="service-list-a" href="#" data-href="Perbaikan Kulkas">Perbaikan Kulkas </a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan / Pembersihan AC">Perbaikan / Pembersihan AC</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Mesin Cuci">Perbaikan Mesin Cuci</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Kipas Angin">Perbaikan Kipas Angin</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Lainya">Perbaikan Lainya</a><br>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-card">
                        <img class="service-icon" src="{{asset('dashboard/assets/img/icon-08.svg')}}" alt="Logo">
                        <div class="service-name">Pekerjaan Las Repair</div>
                    </div>
                    <div class="service-list">
                        <a class="service-list-a" href="#" data-href="Perbaikan Pagar Besi">Perbaikan Pagar Besi</a><br>

                        <a class="service-list-a" href="#" data-href="Perbaikan Kanopi">Perbaikan Kanopi</a><br>

                        <a class="service-list-a" href="#" data-href="Perbaikan Pintu Harmonika">Perbaikan Pintu Harmonika</a><br>

                        <a class="service-list-a" href="#" data-href="Perbaikan Rak Besi">Perbaikan Rak Besi</a><br>

                        <a class="service-list-a" href="#" data-href="Perbaikan Lainya">Perbaikan Lainya</a><br>
                    </div>
                </div>

                <div class="service-box">
                    <div class="service-card">
                        <img class="service-icon" src="{{asset('dashboard/assets/img/icon-09.svg')}}" alt="Logo">
                        <div class="service-name" style="padding-left: 25px;">Tukang Serabutan</div>
                    </div>
                    <div class="service-list">
                        <a class="service-list-a" href="#" data-href="Rabas - Rabas Kebun">Rabas - Rabas Kebun</a><br>
                         <a class="service-list-a" href="#" data-href="Perawatan Taman">Perawatan Taman</a><br>
                        <a class="service-list-a" href="#" data-href="Perawatan Kolam">Perawatan Kolam</a><br>
                        <a class="service-list-a" href="#" data-href="Pekerjaan Galian Tanah">Pekerjaan Galian Tanah</a><br>

                        <a class="service-list-a" href="#" data-href="Pekerjaan Lainya">Pekerjaan Lainya</a><br>
                    </div>
                </div>
            </div>

        </div>

        <footer>
            <div class="footer-left">
                <div class="footer-left-area">
                    <img class="logo" src="{{asset('dashboard/assets/img/footer.svg')}}" alt="Logo">
                    <a class="social-media" href="www.facebook.com"><img class="logo" src="{{asset('dashboard/assets/img/footer_fb.svg')}}" alt="Logo"></a>
                    <a class="social-media" href="www.facebook.com"><img class="logo" src="{{asset('dashboard/assets/img/footer_ig.svg')}}" alt="Logo"></a>
                    <a class="social-media" href="www.facebook.com"><img class="logo" src="{{asset('dashboard/assets/img/footer_tw.svg')}}" alt="Logo"></a>
                    <a class="social-media" href="www.facebook.com"><img class="logo" src="{{asset('dashboard/assets/img/footer_yt.svg')}}" alt="Logo"></a>
                </div>
            </div>

            <div class="footer-right">
                <a href="#"><img class="logo" src="{{asset('dashboard/assets/img/order.svg')}}" alt="Logo"></a>
            </div>
        </footer>

    </section>

    <section class="box mobile-view ">
        <div class="container ">
            <div class="row">
               <!-- Logo -->
                    <div class="col-3">
                        <img class="logo" src="{{asset('dashboard/assets/img/logo.svg')}}" alt="Logo">
                        
                    </div>
                    <div class="col">
                        <p class="logo-text" style="position: absolute;top: 28px; margin-left: -25px;font-size: 16px; font-weight: normal">Daftar Layanan<br>Tukang dan Service</p>
                    </div>      
                <!-- Akhir Logo-->
            </div>

            <div class="row">
                <div class="col-12"  style="padding-right: unset">
                    <div class="card card-yellow" style="font-size: 14px; font-weight: normal;">
                        Silahkan Anda pilih layanan Anda butuhkan. Kami akan datang ke rumah Anda 
                        untuk memberikan layanan / service sesuai kebutuhan Anda.
                    </div>
                </div>
            </div>

            <div class="row mt-5 justify-content-center">
                <div class="col-12 my-2">
                    <div class="card" style="height: 50px;background-color: #1366C4">
                        <img class="service-icon" src="{{asset('dashboard/assets/img/icon-01.svg')}}" alt="Logo">
                        <div class="service-name">Renovasi Skala Kecil</div>
                    </div>
                    <div class="service-list">
                            <a class="service-list-a" href="#" data-href="Perbaikan Atap Bocor">Perbaikan Atap Bocor</a><br>
                            <a class="service-list-a" href="#" data-href="Perbaikan / Pasang Plafond">Perbaikan / Pasang Plafond</a><br>
                            <a class="service-list-a" href="#" data-href="Perbaikan / Pasang Kramik">Perbaikan / Pasang Kramik</a><br>
                            <a class="service-list-a" href="#" data-href="Perbaikan Pagar Dinding">Perbaikan Pagar Dinding</a><br>
                            <a class="service-list-a" href="#" data-href="Perbaikan lainya (Renovasi skala kecil)">Perbaikan Lainya</a><br>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <div class="card" style="height: 50px;background-color: #1366C4">
                        <img class="service-icon" src="{{asset('dashboard/assets/img/icon-02.svg')}}" alt="Logo">
                        <div class="service-name">Pekerjaan Pengecatan</div>
                    </div>
                    <div class="service-list">
                       <a class="service-list-a" href="#" data-href="Pengecatan Pagar">Pengecatan Pagar</a><br>
                        <a class="service-list-a" href="#" data-href="Pengecatan Pintu / Kusen">Pengecatan Pintu / Kusen</a><br>
                        <a class="service-list-a" href="#" data-href="Pengecatan Dinding Rumah">Pengecatan Dinding Rumah</a><br>
                        <a class="service-list-a" href="#" data-href="Kaligrafi Mural Dinding">Kaligrafi Mural Dinding</a><br>
                        <a class="service-list-a" href="#" data-href="Pengecatan Lainya">Pengecatan Lainya</a><br>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <div class="card" style="height: 50px;background-color: #1366C4">
                        <img class="service-icon" src="{{asset('dashboard/assets/img/icon-03.svg')}}" alt="Logo">
                        <div class="service-name">Perbaikan CCTV</div>
                    </div>
                    <div class="service-list">
                           <a class="service-list-a" href="#" data-href="Perbaikan Instalasi Kabel">Perbaikan Instalasi Kabel</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Kamera Rusak">Perbaikan Kamera Rusak</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Koneksi Online">Perbaikan Koneksi Online</a><br>
                        <a class="service-list-a" href="#" data-href="Pemasangan CCTV Baru">Pemasangan CCTV Baru</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Lainya">Perbaikan Lainya</a><br>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <div class="card" style="height: 50px;background-color: #1366C4">
                         <img class="service-icon" src="{{asset('dashboard/assets/img/icon-04.svg')}}" alt="Logo">
                        <div class="service-name">Perbaikan Kelistrikan</div>
                    </div>
                    <div class="service-list">
                           <a class="service-list-a" href="#" data-href="Bongkar Pasang Meteran">Bongkar Pasang Meteran</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Konsleting">Perbaikan Konsleting</a><br>
                        <a class="service-list-a" href="#" data-href="Pemasangan Lampu">Pemasangan Lampu</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Saklar">Perbaikan Saklar</a><br>
                        
                        <a class="service-list-a" href="#" data-href="Perbaikan Lainya">Perbaikan Lainya</a><br>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <div class="card" style="height: 50px;background-color: #1366C4">
                          <img class="service-icon" src="{{asset('dashboard/assets/img/icon-05.svg')}}" alt="Logo">
                        <div class="service-name">Perbaikan Sanitair</div>
                    </div>
                    <div class="service-list">
                        <a class="service-list-a" href="#" data-href="Perbaikan Kran Bocor">Perbaikan Kran Bocor</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Wastafel">Perbaikan Wastafel</a><br>
                        <a class="service-list-a" href="#" data-href="Instalasi Pipa Saluran Air">Instalasi Pipa Saluran Air</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Pipa Tersumbat">Perbaikan Pipa Tersumbat</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Lainya">Perbaikan Lainya</a><br>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <div class="card" style="height: 50px;background-color: #1366C4">
                         <img class="service-icon" src="{{asset('dashboard/assets/img/icon-06.svg')}}" alt="Logo">
                        <div class="service-name">Perbaikan Kursi / Sofa</div>
                    </div>
                    <div class="service-list">
                        <a class="service-list-a" href="#" data-href="Perbaikan Kerangka">Perbaikan Kerangka</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Plitur Kursi">Perbaikan Plitur Kursi</a><br>
                        
                        <a class="service-list-a" href="#" data-href="Penggantian Spon dan Cover">Penggantian Spon dan Cover</a><br>

                        <a class="service-list-a" href="#" data-href="Perbaikan Kursi Total">Perbaikan Kursi Total</a><br>

                        <a class="service-list-a" href="#" data-href="Perbaikan Lainya">Perbaikan Lainya</a><br>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <div class="card" style="height: 50px;background-color: #1366C4">
                         <img class="service-icon" src="{{asset('dashboard/assets/img/icon-07.svg')}}" alt="Logo">
                        <div class="service-name">Service Elektronik</div>
                    </div>
                    <div class="service-list">
                        <a class="service-list-a" href="#" data-href="Perbaikan Kulkas">Perbaikan Kulkas </a><br>
                        <a class="service-list-a" href="#" data-href="">Perbaikan / Pembersihan AC</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Mesin Cuci">Perbaikan Mesin Cuci</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Kipas Angin">Perbaikan Kipas Angin</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Lainya">Perbaikan Lainya</a><br>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <div class="card" style="height: 50px;background-color: #1366C4">
                         <img class="service-icon" src="{{asset('dashboard/assets/img/icon-08.svg')}}" alt="Logo">
                        <div class="service-name">Pekerjaan Las Repair</div>
                    </div>
                    <div class="service-list">
                        <a class="service-list-a" href="#" data-href="Perbaikan Pagar Besi">Perbaikan Pagar Besi</a><br>
                        <a class="service-list-a" href="#" data-href="Perbaikan Kanopi">Perbaikan Kanopi</a><br>

                        <a class="service-list-a" href="#" data-href="Perbaikan Pintu Harmonika">Perbaikan Pintu Harmonika</a><br>

                        <a class="service-list-a" href="#" data-href="Perbaikan Rak Besi">Perbaikan Rak Besi</a><br>

                        <a class="service-list-a" href="#" data-href="Perbaikan Lainya">Perbaikan Lainya</a><br>
                    </div>
                </div>
                <div class="col-12 my-2">
                    <div class="card" style="height: 50px;background-color: #1366C4">
                         <img class="service-icon" src="{{asset('dashboard/assets/img/icon-09.svg')}}" alt="Logo">
                        <div class="service-name" style="padding-left: 25px;">Tukang Serabutan</div>
                    </div>
                    <div class="service-list mb-3">
                        <a class="service-list-a" href="#" data-href="Rabas - Rabas Kebun">Rabas - Rabas Kebun</a><br>
                        <a class="service-list-a" href="#" data-href="Perawatan Taman">Perawatan Taman</a><br>
                        <a class="service-list-a" href="#" data-href="Perawatan Kolam Renang">Perawatan Kolam</a><br>
                        <a class="service-list-a" href="#" data-href="Pekerjaan Galian Tanah">Pekerjaan Galian Tanah</a><br>
                        <a class="service-list-a" href="#" data-href="Pekerjaan Lainya">Pekerjaan Lainya</a><br>
                    </div>
                </div>
                
                <!-- Footer -->
                <div class="col-12">
                    <a href="#"><img class="logo" src="{{asset('dashboard/assets/img/order.svg')}}" alt="Logo" style="width: 300px"></a>

                </div>
                <div class="col-12 mb-5">
                    <div class="row mt-3 justify-content-center">
                    <div class="col">
                    <div class="elipse-social-media">
                      <img style="width:60px; height: 60px;" src="{{asset('dashboard/group-1.svg')}}" alt="">
                    </div>
                  </div>
                  <div class="col">
                    <div class="elipse-social-media">
                      <img style="width:30px; height: 30px;" src="{{asset('dashboard/icon-fb.svg')}}" alt="">
                    </div>
                  </div>
                  <div class="col">
                     <div class="elipse-social-media">
                      <img style="width:30px; height: 30px;" src="{{asset('dashboard/icon-ig.svg')}}" alt="">
                    </div>
                  </div>
                  <div class="col">
                     <div class="elipse-social-media">
                      <img style="width:30px; height: 30px;" src="{{asset('dashboard/icon-twitter.svg')}}" alt="">
                    </div>
                  </div>
                  <div class="col">
                     <div class="elipse-social-media">
                      <img style="width:30px; height: 30px;" src="{{asset('dashboard/icon-yt.svg')}}" alt="">
                    </div>
                  </div>
                  </div>     
                  
                </div>
                </div>
                <!-- Akhir Footer -->
            </div>
            
            
        </div>

    </section>



<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">
    
</script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

<script type="text/javascript" src="{{asset('dashboard/js/layanan.js')}}"></script>

</body>
</html>