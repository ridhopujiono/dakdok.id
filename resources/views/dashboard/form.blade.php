<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1,,maximum-scale=1.0, minimum-scale=1.0;">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('dashboard/css/style_layanan.css')}}">
    <title>Daftar Layanan</title>
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
                    <p class="logo-text">Form Layanan<br>Tukang dan Service</p>
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
                    <form action="{{url('post_form')}}" method="POST" name="form_kirim">
                        <input required="true" type="text" class="d-none" name="waktu2" value="{{\Carbon\Carbon::now()->format('H:i')}}">
                        <div class="form-group">
                            <label for="nama_customer">Nama Customer <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                            <input required="true" name="nama_customer" id="nama_customer" autofocus="true" type="text" class="form-control">

                            <label for="alamat_lengkap">Alamat Customer <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                            <input required="true" name="alamat_lengkap" id="alamat_lengkap" type="text" class="form-control">
                            <label for="no_hp">No. Hp / Whatsapp <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                            <input required="true" name="no_hp" id="no_hp" type="text" class="form-control">

                            <label for="jenis_order">Jenis Order Layanan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                            @if(session('jenis_order'))
                            <select style="margin-bottom: unset; background-color: #cecece;pointer-events: none;" class="form-select jenis_order" aria-label="Default select example" name="jenis_order">
                                <option value="{{session('jenis_order')}}">{{session('jenis_order')}}</option>
                            </select>
                            <small class="" style="margin-top: -5px"><a class="text-success" href="{{url('form')}}">Saya ingin lebih banyak jenis order</a></small><br>
                            <input required="true" name="judul_pekerjaan" type="text" class="d-none" value="{{session('judul_pekerjaan')}}">
                            @else
                            <select style="margin-bottom: unset" class="form-select jenis_order" aria-label="Default select example"  name="jenis_order" >

                              <option selected value="-"> -- Pilih Jenis Order Layanan -- </option>

                              <optgroup label="Renovasi Skala Kecil">

                                <option value="Perbaikan Atap Bocor">Perbaikan Atap Bocor</option>
                                <option value="Perbaikan / Pasang Plafond">Perbaikan / Pasang Plafond</option>
                                <option value="Perbaikan / Pasang Kramik">Perbaikan / Pasang Kramik</option>
                                <option value="Perbaikan Pagar Dinding">Perbaikan Pagar Dinding</option>
                                <option value="Perbaikan lainya">Perbaikan lainnya</option>

                            </optgroup>

                            <optgroup label="Pekerjaan Pengecatan">
                                <option value="Pengecatan Pagar">Pengecatan Pagar</option>
                                <option value="Pengecatan Pintu / Kusen">Pengecatan Pintu / Kusen</option>
                                <option value="Pengecatan Dinding Rumah">Pengecatan Dinding Rumah</option>
                                <option value="Kaligrafi Mural Dinding">Kaligrafi Mural Dinding</option>
                                <option value="Pengecatan Lainya">Pengecatan Lainya</option>
                            </optgroup>

                            <optgroup label="Perbaikan CCTV">
                                <option value="Perbaikan Instalasi Kabel">Perbaikan Instalasi Kabel</option>
                                <option value="Perbaikan Kamera Rusak">Perbaikan Kamera Rusak</option>
                                <option value="Perbaikan Koneksi Online">Perbaikan Koneksi Online</option>
                                <option value="Pemasangan CCTV Baru">Pemasangan CCTV Baru</option>
                                <option value="Perbaikan Lainya">Perbaikan Lainya</option>
                            </optgroup>

                            <optgroup label="Perbaikan Kelistrikan">
                                <option value="Bongkar Pasang Meteran">Bongkar Pasang Meteran</option>
                                <option value="Perbaikan Konsleting">Perbaikan Konsleting</option>
                                <option value="Pemasangan Lampu">Pemasangan Lampu</option>
                                <option value="Perbaikan Saklar">Perbaikan Saklar</option>

                                <option value="Perbaikan Lainya">Perbaikan Lainya</option>
                            </optgroup>

                            <optgroup label="Perbaikan Sanitair">
                                <option value="Perbaikan Kran Bocor">Perbaikan Kran Bocor</option>
                                <option value="Perbaikan Wastafel">Perbaikan Wastafel</option>
                                <option value="Instalasi Pipa Saluran Air">Instalasi Pipa Saluran Air</option>
                                <option value="Perbaikan Pipa Tersumbat">Perbaikan Pipa Tersumbat</option>
                                <option value="Perbaikan Lainya">Perbaikan Lainya</option>
                            </optgroup>

                            <optgroup label="Perbaikan Kursi / Sofa">
                                <option value="Perbaikan Kerangka">Perbaikan Kerangka</option>
                                <option value="Perbaikan Plitur Kursi">Perbaikan Plitur Kursi</option>

                                <option value="Penggantian Spon dan Cover">Penggantian Spon dan Cover</option>

                                <option value="Perbaikan Kursi Total">Perbaikan Kursi Total</option>

                                <option value="Perbaikan Lainya">Perbaikan Lainya</option>
                            </optgroup>

                            <optgroup label="Service Elektronik">
                                <option value="Perbaikan Kulkas">Perbaikan Kulkas </option>
                                <option value="Perbaikan / Pembersihan AC">Perbaikan / Pembersihan AC</option>
                                <option value="Perbaikan Mesin Cuci">Perbaikan Mesin Cuci</option>
                                <option value="Perbaikan Kipas Angin">Perbaikan Kipas Angin</option>
                                <option value="Perbaikan Lainya">Perbaikan Lainya</option>
                            </optgroup>

                            <optgroup label="Pekerjaan Las Repair">
                                <option value="Perbaikan Pagar Besi">Perbaikan Pagar Besi</option>

                                <option value="Perbaikan Kanopi">Perbaikan Kanopi</option>

                                <option value="Perbaikan Pintu Harmonika">Perbaikan Pintu Harmonika</option>

                                <option value="Perbaikan Rak Besi">Perbaikan Rak Besi</option>

                                <option value="Perbaikan Lainya">Perbaikan Lainya</option>
                            </optgroup>

                            <optgroup label="Tukang Serabutan">
                                <option value="Rabas - Rabas Kebun">Rabas - Rabas Kebun</option>
                                <option value="Perawatan Taman">Perawatan Taman</option>
                                <option value="Perawatan Kolam">Perawatan Kolam</option>
                                <option value="Pekerjaan Galian Tanah">Pekerjaan Galian Tanah</option>

                                <option value="Pekerjaan Lainya">Pekerjaan Lainya</option>
                            </optgroup>



                        </select>
                        <input required="true" name="judul_pekerjaan" type="text" class="d-none" value="">
                        @endif
                        <label for="kontak_penerima" style="margin-top: 15px">Kontak Penerima <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                        <input required="true" name="kontak_penerima" id="kontak_penerima" type="text" class="form-control">
                        <label for="lokasi_pekerjaan">Lokasi Pekerjaan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                        <textarea name="lokasi_pekerjaan" id="lokasi_pekerjaan" type="text" class="form-control"></textarea>
                        <label for="deskripsi_pekerjaan">Deskripsi Pekerjaan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                        <textarea name="deskripsi_pekerjaan" id="deskripsi_pekerjaan" type="text" class="form-control"></textarea>
                        <div style="background-color: #efefef;padding: 15px;border-radius: 7px;">
                            <div class="container_detail_keterangan">
                                <label for="detail_pekerjaan">Detail Pekerjaan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                                <textarea name="detail_pekerjaan[]" id="detail_pekerjaan" type="text" class="form-control"></textarea>
                                <label for="keterangan">Keterangan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                                <textarea name="keterangan[]" id="keterangan" type="text" class="form-control"></textarea>

                            </div>
                            <div class="">
                                <button type="button" class="btn btn-primary btn_tambah"> <span style="font-size: 19px; font-weight: bold">+</span> Tambah </button>
                            </div>
                            
                        </div>

                        @csrf
                    </div>
                    <div class=" mt-3" style="width: 100%;left: 0;">
                        <button type="submit" class="btn-submit btn btn-success" style="width: 100%;  border-radius: unset; ">
                            Order Layanan Sekarang
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
                <form action="{{url('post_form')}}" method="POST" name="form_kirim">
                    <input required="true" type="text" class="d-none" name="waktu2" value="{{\Carbon\Carbon::now()->format('H:i')}}">
                    <div class="form-group">
                        <label for="nama_customer">Nama Customer <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                        <input required="true" name="nama_customer" id="nama_customer" autofocus="true" type="text" class="form-control">
                        <label for="alamat_lengkap">Alamat Customer <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                        <input required="true" name="alamat_lengkap" id="alamat_lengkap" type="text" class="form-control">
                        <label for="no_hp">No. Hp / Whatsapp <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                        <input required="true" name="no_hp" id="no_hp" type="text" class="form-control">

                        <label for="jenis_order">Jenis Order Layanan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                        @if(session('jenis_order'))
                        <select style="margin-bottom: unset; background-color: #cecece;pointer-events: none;" class="form-select jenis_order" aria-label="Default select example" name="jenis_order">
                            <option value="{{session('jenis_order')}}">{{session('jenis_order')}}</option>
                        </select>
                        <small class="" style="margin-top: -5px"><a class="text-success" href="{{url('form')}}">Saya ingin lebih banyak jenis order</a></small><br>
                        <input required="true" name="judul_pekerjaan" type="text" class="d-none" value="{{session('judul_pekerjaan')}}">
                        @else
                        <select style="margin-bottom: unset" class="form-select jenis_order" aria-label="Default select example"  name="jenis_order" >

                          <option selected value="-"> -- Pilih Jenis Order Layanan -- </option>

                          <optgroup label="Renovasi Skala Kecil">

                            <option value="Perbaikan Atap Bocor">Perbaikan Atap Bocor</option>
                            <option value="Perbaikan / Pasang Plafond">Perbaikan / Pasang Plafond</option>
                            <option value="Perbaikan / Pasang Kramik">Perbaikan / Pasang Kramik</option>
                            <option value="Perbaikan Pagar Dinding">Perbaikan Pagar Dinding</option>
                            <option value="Perbaikan lainya">Perbaikan lainnya</option>

                        </optgroup>

                        <optgroup label="Pekerjaan Pengecatan">
                            <option value="Pengecatan Pagar">Pengecatan Pagar</option>
                            <option value="Pengecatan Pintu / Kusen">Pengecatan Pintu / Kusen</option>
                            <option value="Pengecatan Dinding Rumah">Pengecatan Dinding Rumah</option>
                            <option value="Kaligrafi Mural Dinding">Kaligrafi Mural Dinding</option>
                            <option value="Pengecatan Lainya">Pengecatan Lainya</option>
                        </optgroup>

                        <optgroup label="Perbaikan CCTV">
                            <option value="Perbaikan Instalasi Kabel">Perbaikan Instalasi Kabel</option>
                            <option value="Perbaikan Kamera Rusak">Perbaikan Kamera Rusak</option>
                            <option value="Perbaikan Koneksi Online">Perbaikan Koneksi Online</option>
                            <option value="Pemasangan CCTV Baru">Pemasangan CCTV Baru</option>
                            <option value="Perbaikan Lainya">Perbaikan Lainya</option>
                        </optgroup>

                        <optgroup label="Perbaikan Kelistrikan">
                            <option value="Bongkar Pasang Meteran">Bongkar Pasang Meteran</option>
                            <option value="Perbaikan Konsleting">Perbaikan Konsleting</option>
                            <option value="Pemasangan Lampu">Pemasangan Lampu</option>
                            <option value="Perbaikan Saklar">Perbaikan Saklar</option>
                            
                            <option value="Perbaikan Lainya">Perbaikan Lainya</option>
                        </optgroup>

                        <optgroup label="Perbaikan Sanitair">
                            <option value="Perbaikan Kran Bocor">Perbaikan Kran Bocor</option>
                            <option value="Perbaikan Wastafel">Perbaikan Wastafel</option>
                            <option value="Instalasi Pipa Saluran Air">Instalasi Pipa Saluran Air</option>
                            <option value="Perbaikan Pipa Tersumbat">Perbaikan Pipa Tersumbat</option>
                            <option value="Perbaikan Lainya">Perbaikan Lainya</option>
                        </optgroup>

                        <optgroup label="Perbaikan Kursi / Sofa">
                            <option value="Perbaikan Kerangka">Perbaikan Kerangka</option>
                            <option value="Perbaikan Plitur Kursi">Perbaikan Plitur Kursi</option>
                            
                            <option value="Penggantian Spon dan Cover">Penggantian Spon dan Cover</option>

                            <option value="Perbaikan Kursi Total">Perbaikan Kursi Total</option>

                            <option value="Perbaikan Lainya">Perbaikan Lainya</option>
                        </optgroup>

                        <optgroup label="Service Elektronik">
                            <option value="Perbaikan Kulkas">Perbaikan Kulkas </option>
                            <option value="Perbaikan / Pembersihan AC">Perbaikan / Pembersihan AC</option>
                            <option value="Perbaikan Mesin Cuci">Perbaikan Mesin Cuci</option>
                            <option value="Perbaikan Kipas Angin">Perbaikan Kipas Angin</option>
                            <option value="Perbaikan Lainya">Perbaikan Lainya</option>
                        </optgroup>

                        <optgroup label="Pekerjaan Las Repair">
                            <option value="Perbaikan Pagar Besi">Perbaikan Pagar Besi</option>

                            <option value="Perbaikan Kanopi">Perbaikan Kanopi</option>

                            <option value="Perbaikan Pintu Harmonika">Perbaikan Pintu Harmonika</option>

                            <option value="Perbaikan Rak Besi">Perbaikan Rak Besi</option>

                            <option value="Perbaikan Lainya">Perbaikan Lainya</option>
                        </optgroup>

                        <optgroup label="Tukang Serabutan">
                            <option value="Rabas - Rabas Kebun">Rabas - Rabas Kebun</option>
                            <option value="Perawatan Taman">Perawatan Taman</option>
                            <option value="Perawatan Kolam">Perawatan Kolam</option>
                            <option value="Pekerjaan Galian Tanah">Pekerjaan Galian Tanah</option>

                            <option value="Pekerjaan Lainya">Pekerjaan Lainya</option>
                        </optgroup>



                    </select>
                    <input required="true" name="judul_pekerjaan" type="text" class="d-none" value="">
                    @endif

                    <label for="kontak_penerima" style="margin-top: 15px">Kontak Penerima <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                    <input required="true" name="kontak_penerima" id="kontak_penerima" type="text" class="form-control">
                    <label for="lokasi_pekerjaan">Lokasi Pekerjaan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                    <textarea name="lokasi_pekerjaan" id="lokasi_pekerjaan" type="text" class="form-control"></textarea>

                    <label for="deskripsi_pekerjaan">Deskripsi Pekerjaan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                    <textarea name="deskripsi_pekerjaan" id="deskripsi_pekerjaan" type="text" class="form-control"></textarea>
                    <div style="background-color: #efefef;padding: 15px;border-radius: 7px;margin-bottom: 20px">
                        <div class="container_detail_keterangan">
                            <label for="detail_pekerjaan">Detail Pekerjaan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                            <textarea name="detail_pekerjaan[]" id="detail_pekerjaan" type="text" class="form-control"></textarea>
                            <label for="keterangan">Keterangan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                            <textarea name="keterangan[]" id="keterangan" type="text" class="form-control"></textarea>

                        </div>
                        <div class="">
                            <button type="button" class="btn btn-primary btn_tambah"> <span style="font-size: 19px; font-weight: bold">+</span> Tambah </button>
                        </div>

                    </div>
                    @csrf
                </div>
                <div class=" mt-3" style="position: fixed;bottom: 0;width: 100%;left: 0;">
                    <button type="submit" class="btn-submit btn btn-success" style="width: 100%;  border-radius: unset; ">
                        Order Layanan Sekarang
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
    $(document).ready(function(){
        $('form[name="form_kirim"]').on('submit', function(){
            $('.btn-submit').html(`...`);
        });
    })
</script>
</body>
</html>