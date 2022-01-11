<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,,maximum-scale=1.0, minimum-scale=1.0;">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('dashboard/css/style_layanan.css')}}">
    <title>Form Daftar Proyek</title>
</head>
<style type="text/css">
    optgroup{
        color: blue;
    }
</style>
<body class="main-page">

    <section class="box web-view ">
        <header>
            <div class="header-left">
                <div class="left-area">
                    <img class="logo" src="{{asset('dashboard/assets/img/logo.svg')}}" alt="Logo">
                    <p class="logo-text">Form Layanan<br>Order Proyek</p>
                </div>
            </div>

            <div class="header-right">
                <div class="right-area">  
                    Silahkan Anda lengkapi data yang diperlukan untuk keperluan pemesanan layanan dari <b> dakdok.id </b>
                </div>
            </div>
        </header>

        <div class="container-fluid">
            <div class="row row-form justify-content-center mt-5" style="padding: 15px;">
                <div class="col-md-10">
                    @if(session('berhasil'))
                    <div class="alert alert-success berhasil">
                        Berhasil melakukan pemesanan layanan <b>dakdok.id, anda akan segera dihubungi oleh pihak admin kami</b>
                    </div>
                    @elseif(session('gagal'))
                    <div class="alert alert-danger berhasil">
                        Gagal melakukan pemesanan layanan <b>dakdok.id</b> pastikan koneksi anda bagus
                    </div>
                    @endif
                    <form action="{{url('post_proyek')}}" method="POST" name="form_kirim">
                        <input required="true" type="text" class="d-none" name="waktu2" value="{{\Carbon\Carbon::now()->format('H:i')}}">
                        <div class="form-group">
                            <label for="nama_customer">Nama Customer <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                            <input required="true" name="nama_customer" id="nama_customer" autofocus="true" type="text" class="form-control">

                            <label for="alamat_lengkap">Alamat Customer <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                            <input required="true" name="alamat_lengkap" id="alamat_lengkap" type="text" class="form-control">
                            <label for="no_hp">No. Hp / Whatsapp <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                            <input required="true" name="no_hp" id="no_hp" type="text" class="form-control">

                            <label for="jenis_order">Jenis Order Layanan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                            @if(session('jenis_order_proyek'))
                            <select style="margin-bottom: unset; background-color: #cecece;pointer-events: none;" class="form-select jenis_order" aria-label="Default select example" name="jenis_order_proyek">
                                <option value="{{session('jenis_order_proyek')}}">{{session('jenis_order_proyek')}}</option>
                            </select>
                            @endif
                            
                        <label for="kontak_penerima" style="margin-top: 15px">Kontak Penerima <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>

                        <input required="true" name="kontak_penerima" id="kontak_penerima" type="text" class="form-control">
                        <label for="lokasi_pekerjaan">Lokasi Pekerjaan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                        <textarea name="lokasi_pekerjaan" id="lokasi_pekerjaan" type="text" class="form-control"></textarea>
                        <label for="deskripsi_pekerjaan">Deskripsi Pekerjaan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                        <textarea name="deskripsi_pekerjaan" id="deskripsi_pekerjaan" type="text" class="form-control"></textarea>
                        

                        @csrf
                    </div>
                    <div class=" mt-3" style="width: 100%;left: 0;">
                        <button type="submit" class="btn btn-success" style="width: 100%;  border-radius: unset; ">
                            Order Proyek Sekarang
                        </button>
                    </div>
                </form>
            </div>
        </div>

        <!-- <footer>
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
        </footer> -->

    </section>

    <section class="box mobile-view ">
        <div class="container ">
            <div class="row">
               <!-- Logo -->
               <div class="col-3">
                <img class="logo" src="{{asset('dashboard/assets/img/logo.svg')}}" alt="Logo">

            </div>
            <div class="col">
                <p class="logo-text" style="position: absolute;top: 28px; margin-left: -25px;font-size: 16px; font-weight: normal; line-height: 21px;">Form Layanan<br>Tukang dan Service</p>
            </div>      
            <!-- Akhir Logo-->
        </div>

        <div class="row">
            <div class="col-12"  style="padding-right: unset">
                <div class="card card-yellow" style="font-size: 14px; font-weight: normal;">
                    Silahkan Anda lengkapi data yang diperlukan untuk keperluan pemesanan layanan dari <b> dakdok.id </b>
                </div>
            </div>
        </div>

        <!-- <div class="container"> -->
            <div class="row row-form mt-5" style="
            padding: 15px;">
            <div class="col-md-12">
                @if(session('berhasil'))
                <div class="alert alert-success berhasil">
                    Berhasil melakukan pemesanan layanan <b>dakdok.id, anda akan segera dihubungi oleh pihak admin kami</b>
                </div>
                @elseif(session('gagal'))
                <div class="alert alert-danger berhasil">
                    Gagal melakukan pemesanan layanan <b>dakdok.id</b> pastikan koneksi anda bagus
                </div>
                @endif
                <form action="{{url('post_proyek')}}" method="POST" name="form_kirim">
                    <input required="true" type="text" class="d-none" name="waktu2" value="{{\Carbon\Carbon::now()->format('H:i')}}">
                    <div class="form-group">
                        <label for="nama_customer">Nama Customer <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                        <input required="true" name="nama_customer" id="nama_customer" autofocus="true" type="text" class="form-control">

                        <label for="alamat_lengkap">Alamat Customer <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                        <input required="true" name="alamat_lengkap" id="alamat_lengkap" type="text" class="form-control">
                        <label for="no_hp">No. Hp / Whatsapp <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                        <input required="true" name="no_hp" id="no_hp" type="text" class="form-control">

                        <label for="jenis_order">Jenis Order Layanan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                        @if(session('jenis_order_proyek'))
                        <select style="margin-bottom: unset; background-color: #cecece;pointer-events: none;" class="form-select jenis_order" aria-label="Default select example" name="jenis_order_proyek">
                            <option value="{{session('jenis_order_proyek')}}">{{session('jenis_order_proyek')}}</option>
                        </select>
                        @endif
                        
                    <label for="kontak_penerima" style="margin-top: 15px">Kontak Penerima <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>

                    <input required="true" name="kontak_penerima" id="kontak_penerima" type="text" class="form-control">
                    <label for="lokasi_pekerjaan">Lokasi Pekerjaan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                    <textarea name="lokasi_pekerjaan" id="lokasi_pekerjaan" type="text" class="form-control"></textarea>
                    <label for="deskripsi_pekerjaan">Deskripsi Pekerjaan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                    <textarea name="deskripsi_pekerjaan" id="deskripsi_pekerjaan" type="text" class="form-control"></textarea>
                    

                    @csrf
                </div>
                <div class=" mt-3" style="width: 100%;left: 0;">
                    <button type="submit" class="btn btn-success" style="width: 100%;  border-radius: unset; ">
                        Order Proyek Sekarang
                    </button>
                </div>
            </form>
        </div>


    </div>

</section>



<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous">

</script>
<script type="text/javascript" src="{{asset('dashboard/js/custom.js')}}"></script>

<script>
    // $(document).ready(function(){
    //     $('form[name="form_kirim"]').on('submit', function(e){
    //         e.prevent
    //     });
    // })
</script>
</body>
</html>