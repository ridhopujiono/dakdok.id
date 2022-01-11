@extends('admin.layouts.main')
@section('container')
<link rel="stylesheet" href="{{asset('admin/assets/vendors/simple-datatables/style.css')}}">
<link rel="stylesheet" href="{{asset('admin/assets/vendors/toastify/toastify.css')}}">
<style>
    .btn-hapus:hover {
        opacity: 0.7;
    }
</style>
<div class="page-heading">
    <div class="m-auto">
        <a href="{{url('tambah_iklan')}}" class="btn btn-primary rounded-pill shadow-sm"><span class=" bi bi-plus"></span> tambah iklan</a>
    </div>
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

                <div class="card-content">

                    <!-- table hover -->
                    <div class="table-responsive px-5 pb-5">
                        <table class="table table-hover mb-0" id="table_iklan">
                            <thead class="table-primary">
                                <tr class="text-center">
                                    <th class="text-center">NO</th>
                                    <th class="text-center">NAMA IKLAN</th>
                                    <th class="text-center">DESKRIPSI IKLAN</th>
                                    <th class="text-center">OPSI</th>
                                </tr>
                            </thead>
                            <tbody id="tbody-iklan">
                                @foreach($data as $d)
                                <tr class="text-center">
                                    <td name="no">{{ $no++ }}</td>
                                    <th name="nama_iklan" class="text-center">{{ $d->nama_iklan }}</th>
                                    <td name="deskripsi_iklan">{{ $d->deskripsi_iklan }}</td>
                                    <td>
                                        <div class="d-inline">
                                            <a href="{{url('edit_iklan')}}/{{$d->id_iklan}}" class="badge bg-primary">edit</a>
                                            <form action="{{url('hapus_iklan')}}/{{$d->id_iklan}}" method="POST" class="d-inline">
                                                @csrf
                                                @method('delete')
                                                <button type="button" class="badge bg-secondary border-0" onclick="konfirmasi_hapus(this.form)">hapus</button>

                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
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
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-database.js"></script>
<script src="{{asset('admin/assets/js/fbase.js')}}"></script>
<script src="{{asset('admin/assets/js/iklan.js')}}"></script>

@include('admin/layouts/notifikasi')

@if(session('berhasil_hapus'))
<script>
    let msg = "{{session('berhasil_hapus')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#4fbe87",
    }).showToast();
</script>
@elseif(session('gagal_hapus'))
<script>
    let msg = "{{session('gagal_hapus')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#a20505",
    }).showToast();
</script>
@elseif(session('berhasil_update'))
<script>
    let msg = "{{session('berhasil_update')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#4fbe87",
    }).showToast();
</script>

@elseif(session('gagal_update'))
<script>
    let msg = "{{session('gagal_update')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#a20505",
    }).showToast();
</script>
@elseif(session('berhasil_hapus'))
<script>
    let msg = "{{session('berhasil_hapus')}}";
    Toastify({
        text: msg,
        duration: 3000,
        close: true,
        gravity: "top",
        position: "right",
        backgroundColor: "#4fbe87",
    }).showToast();
</script>
@endif


@endsection