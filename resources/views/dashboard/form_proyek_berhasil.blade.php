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

            
        </header>

        <div class="container-fluid">
            <div class="row row-form justify-content-center" style="padding: 15px;">
                <div class="col-md-10">
                    <div class="alert alert-success berhasil">
                        Berhasil melakukan pemesanan layanan <b>dakdok.id, anda akan segera dihubungi oleh pihak admin kami</b>
                    </div>
                    
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
                <p class="logo-text" style="position: absolute;top: 28px; margin-left: -25px;font-size: 16px; font-weight: normal; line-height: 21px;">Form Layanan<br>Order Proyek</p>
            </div>      
            <!-- Akhir Logo-->
        </div>

        <div class="row">
            
        </div>

        <!-- <div class="container"> -->
            <div class="row row-form" style="
            padding: 15px;">
            <div class="col-md-12">
               <div class="alert alert-success berhasil">
                        Berhasil melakukan pemesanan layanan <b>dakdok.id, anda akan segera dihubungi oleh pihak admin kami</b>
                    </div>
                
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