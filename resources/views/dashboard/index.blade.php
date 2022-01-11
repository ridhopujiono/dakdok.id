<!doctype html>
<html lang="en">
<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1,,maximum-scale=1.0, minimum-scale=1.0;">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="{{asset('dashboard/css/style.css')}}">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">

  <title>Dakdok.id</title>
</head>
<body>

  <div class="container mb-5 web-view">
    <!-- Row Pertama -->
    <div class="row">
      <!-- Kolom Pertama -->
      <div class="col-md-4 mt-5">

        <!-- Logo -->
        <div class="logo text-white fw-bold">
          <img src="{{asset('dashboard/logo.png')}}" style="width: 200px; height: 145px;" class="logo-dakdok"alt="">
        </div>
        <!-- Akhir Logo -->

      </div>
      <!-- Akhir Pertama -->


      <!-- Kolom Kedua -->
      <div class="col-md-8">

        <div class="card label-info">
          <div class="card-body" style="padding: 0.5rem 2rem">
            <div class="row">
              <!-- Alamat DLL -->
              <div class="col-md-4">

                <div class="row">
                  <div class="col-md-2">
                    <img src="{{asset('dashboard/icon-home.svg')}}" style="width: 20px; height: 20px" alt="">
                  </div>
                  <div class="col-md-10">
                    <p class="label-info-text">
                      Kantor :<br> Ruko Mahamitra,<br> Jl. Merik 261<br> Sidorejo Tuban
                    </p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-2">
                    <img src="{{asset('dashboard/icon-email.svg')}}" style="width: 20px; height: 20px" alt="">
                  </div>
                  <div class="col-md-10">
                    <p class="label-info-text">
                      Email :<br> layanan@dakdok.id
                    </p>
                  </div>
                </div>
                  <!-- <div>
                  <img src="{{asset('circle.svg')}}" alt="">
                    
                </div> -->

              </div>


              <!-- Akhir Alamat DLL -->
              
              <div class="col-md-8 text-white">
                <div class="btn-daftar-layanan">

                  <button class="btn btn-dark btn-block p-3" style="border-radius: 10px" onclick="window.location.href='http://dakdok.id/service'"><span><img src="{{asset('dashboard/icon-window.svg')}}" style="width: 15px; margin-right: 10px;" alt=""></span>Lihat Daftar Layanan</button>
                </div>

              </div>

            </div>


          </div>
        </div>

      </div>
    </div>

  </div>
  <!-- Akhir Kolom Kedua -->
</div>
<!-- Akhir Row Pertama -->
<div class="container web-view">
  <div class="row">
    <!-- Kolom Pertama -->
    <div class="col-md-4" style="padding-right: 60px;">
      <p class="fw-bold text-white" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-size: 21px">
        Layanan Jasa Tukang dan Service
      </p>
      <p class=" text-white" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-size: 15.5px">
        Kami hadir di kota anda untuk
        memberikan layanan jasa 
        berbagai macam perbaikan 
        di rumah anda. <br><br>

        Jika terjadi kerusakan pintu rumah,
        tembok, lantai, saluran air bocor,
        butuh perbaikan listrik, kamera 
        CCTV, service AC, kursi atau sofa, 
        pengecatan, perbaikan taman,
        tukang serabutan, hingga renovasi 
        rumah, anda dapat menghubungi 
        kami dan tim dakdok.id akan 
        datang ke rumah anda untuk 
        melakukan perbaikan dan service
        yang anda butuhkan.  
      </p>
      <div class="row">
        <div class="col">
          <img src="{{asset('dashboard/group.png')}}" style="width: 50px; height: 70px" alt="">
        </div>
        <div class="col">
          <div class="elipse-social-media">
            <a href="https://www.facebook.com/profile.php?id=100070598551164">
              <img style="width:30px; height: 30px;" src="{{asset('dashboard/icon-fb.svg')}}" alt="">

            </a>
          </div>
        </div>
        <div class="col">
         <div class="elipse-social-media">
          <a href="https://instagram.com/dakdok.id?utm_medium=copy_link">
            <img style="width:30px; height: 30px;" src="{{asset('dashboard/icon-ig.svg')}}" alt="">

          </a>
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
<!-- Akhir Pertama -->


<!-- Kolom Kedua -->
<div class="col-md-8">
  <div class="row">
    <div class="col-6 text-white">
      <p style="font-size: 45px; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); line-height: 40px">
        Panggil 
        tukang ke 
        rumahmu 
        <b>sekarang !</b>
      </p>

      <div class="row mt-5">
        <div class="col-md-4">
          <div class="elipse">
            <img src="{{asset('dashboard/icon-home-search.svg')}}" style="width: 60px; height: 60px; " alt="">
          </div>
        </div>
        <div class="col-md-8" style="border-left: 2px solid #868686;margin-left: -20px;">
          <a href="http://dakdok.id/form" style="text-decoration: none;">
            <h2 style="color: #FFD800; cursor: pointer; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" class="fw-bold">ORDER LAYANAN</h2>
          </a>
        </div>
      </div>

      <div class="row mt-4">
        <div class="col-md-4">
          <div class="elipse">
            <img src="{{asset('dashboard/icon-wa.svg')}}" style="width: 60px; height: 60px; " alt="">
          </div>
        </div>
        <div class="col-md-8" style="border-left: 2px solid #868686;margin-left: -20px;">
          <a href="http://wa.me/6281259389977" style="text-decoration: none;">
            <h2 style="color: #FFD800; cursor: pointer; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" class="fw-bold">CUSTOMER SERVICE</h2>
          </a>
        </div>
      </div>
    </div>
    <div class="col-6">
      <img src="{{asset('dashboard/gambar-tukang.png')}}" style="width: 100%; height: 90%;" alt="">

    </div>
  </div>
</div>
<!-- AkhirKolom Kedua -->

</div>
</div>
</div>

<!-- MOBILE VIEW-->
<div class="container mobile-view">
  <div class="row">
   <!-- Logo -->
   <div class="logo text-white fw-bold">
    <img src="{{asset('dashboard/logo.png')}}" style="width: 140px; height:110px;" class="logo-dakdok-mobile"alt="">
  </div>
</div>


<div class="row">
  <div class="col-12" style=" ">
    <p class="fw-bold text-white" style="text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);font-size: 24px">
      Layanan Jasa Tukang dan Service
    </p>
    <p class=" text-white" style="font-size: 17.5px">
      Kami hadir di kota anda untuk
      memberikan layanan jasa 
      berbagai macam perbaikan 
      di rumah anda. <br>

      Jika terjadi kerusakan pintu rumah,
      tembok, lantai, saluran air bocor,
      butuh perbaikan listrik, kamera 
      CCTV, service AC, kursi atau sofa, 
      pengecatan, perbaikan taman,
      tukang serabutan, hingga renovasi 
      rumah, anda dapat menghubungi 
      kami dan tim dakdok.id akan 
      datang ke rumah anda untuk 
      melakukan perbaikan dan service
      yang anda butuhkan.  
    </p>
  </div>
</div>


<div class="row mt-5 justify-content-center">
  <img src="{{asset('dashboard/gambar-tukang.png')}}" style="width: 70%; height: 60%;" alt="">
</div>
<div class="row text-white text-center mt-5">
  <p style="font-size: 30px; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); line-height: 40px">
    Panggil 
    tukang ke 
    rumahmu 
    <b>sekarang!</b>
  </p>
</div>
<div class="row mt-2 justify-content-center">
  <div class="col-8">
    <div class="row">
      <div class="col-4">
        <div class="elipse">
          <img src="{{asset('dashboard/icon-home-search.svg')}}" style="width: 40px; height: 40px; " alt="">
        </div>
      </div>
      <div class="col-8" style="border-left: 2px solid #868686;">
        <a href="http://dakdok.id/form" style="text-decoration: none;">
          <h5 style="transform: translate(10px, 10px);color: #FFD800; cursor: pointer; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25);" class="fw-bold">ORDER LAYANAN</h5>
          
        </a>
      </div>
    </div>

    <div class="row mt-4 mb-2">
      <div class="col-4">
        <div class="elipse">
          <img src="{{asset('dashboard/icon-wa.svg')}}" style="width: 40px; height: 40px; " alt="">
        </div>
      </div>
      <div class="col-8" style="border-left: 2px solid #868686;">
        <a href="http://wa.me/6281259389977" style="text-decoration: none;">
          <h5 style="transform: translate(10px, 10px);color: #FFD800; cursor: pointer; text-shadow: 0px 4px 4px rgba(0, 0, 0, 0.25); " class="fw-bold">CUSTOMER SERVICE</h5>
        </a>
      </div>
    </div>
  </div>
</div>

<div class="row mt-5">
  <div class="footer">
    <div class="col-md-8">

      <div class="card label-info-mobile">
        <div class="card-body" style="padding: 0.5rem 2rem">
          <div class="row">
            <!-- Alamat DLL -->
            <div class="col-md-4">

              <div class="row">
                <div class="col-md-2">
                  <img src="{{asset('dashboard/icon-home.svg')}}" style="width: 20px; height: 20px" alt="">
                </div>
                <div class="col-md-10">
                  <p class="label-info-text">
                    Kantor :<br> Ruko Mahamitra,<br> Jl. Merik 261<br> Sidorejo Tuban
                  </p>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  <img src="{{asset('dashboard/icon-email.svg')}}" style="width: 20px; height: 20px" alt="">
                </div>
                <div class="col-md-10">
                  <p class="label-info-text">
                    Email :<br> layanan@dakdok.id
                  </p>
                </div>
              </div>
                  <!-- <div>
                  <img src="{{asset('circle.svg')}}" alt="">
                    
                </div> -->

              </div>


              <!-- Akhir Alamat DLL -->

              
              <div class="col-md-8 text-white">
                <div class="btn-daftar-layanan">

                  <button class="btn btn-dark p-3" style="border-radius: 10px" onclick="window.location.href='http://dakdok.id/service'"><span><img src="{{asset('dashboard/icon-window.svg')}}" style="width: 15px; margin-right: 10px;" alt=""></span>Lihat Daftar Layanan</button>
                </div>

              </div>

            </div>

            <div class="row mt-3 justify-content-center">
              <div class="col">
                <div class="elipse-social-media">
                 <a taget="_blank" href="https://www.facebook.com/profile.php?id=100070598551164">
                  <img style="width:30px; height: 30px;" src="{{asset('dashboard/icon-fb.svg')}}" alt="">

                </a>
              </div>
            </div>
            <div class="col">
             <div class="elipse-social-media">
              <a taget="_blank" href="https://instagram.com/dakdok.id?utm_medium=copy_link">
               <img style="width:30px; height: 30px;" src="{{asset('dashboard/icon-ig.svg')}}" alt="">

             </a>
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

</div>
</div>

</div>
</div>
</div>
<!-- AKHIR MOBILE VIEW-->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" ></script>


</body>
</html>