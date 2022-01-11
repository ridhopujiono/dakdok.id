@extends('admin.layouts.main')
    @section('container')
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/toastify/toastify.css')}}">
        <style>
            .btn-hapus:hover{
                opacity: 0.7;
            }
        </style>
        <div class="page-heading">
            <h4>Tambah Iklan</h4>
            <!-- <div class="float-start">
                <button class="btn btn-success">+ Iklan</button>
            </div> -->
            <!-- <h3>Iklan</h3> -->
        </div>
        <div class="page-content">
            <section class="row">

                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Iklan</h4>
                        </div>

                        

                        
                        
                        <div class="card-content p-3">
                            <form action="{{url('tambah_iklan')}}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="nama_iklan">Nama Iklan</label>
                                    <input type="text" class="form-control" id="nama_iklan"  required name="nama_iklan" placeholder="Isikan nama iklan">
                                </div>
                                <div class="form-group">
                                    <label for="foto">Foto Iklan</label>
                                    <input type="file" class="form-control" id="foto"  required name="foto" placeholder="Isikan foto iklan">
                                </div>
                                <div class="form-group with-title mb-3">
                                    <textarea class="form-control" id="deskripsi_iklan" rows="3"  required name="deskripsi_iklan"></textarea>
                                    <label>Deskripsi iklan</label>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary">Simpan</button>
                                    <a href="{{url('iklan')}}" class="btn btn-light shadow-sm">Kembali</a>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                
        </div>
            
        
        <script src="{{asset('admin/assets/vendors/simple-datatables/simple-datatables.js')}}"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
        <script src="{{asset('admin/assets/vendors/toastify/toastify.js')}}"></script>
        <script>
            let url = '{{url("/pdf")}}';
            let url_transaksi = '{{url("/get_transaksi")}}';
            let url_ubah_status = "{{url('/ubah_status')}}";
            let url_hapus_transaksi = "{{url('hapus_transaksi')}}";
        </script>
        <script src="{{asset('admin/assets/js/extensions/lihat_pdf.js')}}"></script>
        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-database.js"></script>
        <script src="{{asset('admin/assets/js/fbase.js')}}"></script>
        <script src="{{asset('admin/assets/js/transaksi.js')}}"></script>
        @include('admin/layouts/notifikasi')
        
        @if(session('success'))
            <script>
                let msg = "{{session('success')}}";
                Toastify({
                    text: msg,
                    duration: 3000,
                    close:true,
                    gravity:"top",
                    position: "right",
                    backgroundColor: "#4fbe87",
                }).showToast();
            </script>
        @elseif(session('error'))
            <script>
                let msg = "{{session('error')}}";
                Toastify({
                    text: msg,
                    duration: 3000,
                    close:true,
                    gravity:"top",
                    position: "right",
                    backgroundColor: "#a20505",
                }).showToast();
            </script>
    @endif        

        
    @endsection