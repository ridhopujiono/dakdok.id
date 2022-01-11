@extends('admin.layouts.main')
    @section('container')
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/simple-datatables/style.css')}}">
    <link rel="stylesheet" href="{{asset('admin/assets/vendors/toastify/toastify.css')}}">
        <style>
            .btn-hapus:hover{
                opacity: 0.7;
            }
        </style>
        <div class="page-content">
            <div class="data_jml">
                <section class="row">
                    <div class="col">
                        <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon red">
                                                    <i class="bi bi-cart" style="
                                                        position: absolute;
                                                        margin-top: -8px;
                                                        margin-left: -8px;
                                                    "></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">Order</h6>
                                                <h6 class="font-extrabold mb-0">{{ $data_count['data_order'] }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="col">
                        <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon blue">
                                                    <i class="bi bi-clipboard-check" style="
                                                        position: absolute;
                                                        margin-top: -8px;
                                                        margin-left: -8px;
                                                    "></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">survey</h6>
                                                <h6 class="font-extrabold mb-0">{{ $data_count['data_survey'] }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="col">
                        <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green" >
                                                    <i class="bi bi-card-checklist" style="
                                                        position: absolute;
                                                        margin-top: -8px;
                                                        margin-left: -8px;
                                                    "></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">deal</h6>
                                                <h6 class="font-extrabold mb-0">{{ $data_count['data_deal'] }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="col">
                        <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green " style="background-color: rgba(231, 231, 27, 0.795)">
                                                    <i class="bi bi-tools" style="
                                                        position: absolute;
                                                        margin-top: -8px;
                                                        margin-left: -8px;
                                                    "></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold" style="font-size: 13px;">dikerjakan</h6>
                                                <h6 class="font-extrabold mb-0">{{ $data_count['data_dikerjakan'] }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="col">
                        <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green">
                                                    <i class="bi bi-check" style="
                                                        position: absolute;
                                                        margin-top: -8px;
                                                        margin-left: -8px;
                                                    "></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">selesai</h6>
                                                <h6 class="font-extrabold mb-0">{{ $data_count['data_selesai'] }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                    <div class="col">
                        <div class="card">
                                    <div class="card-body px-3 py-4-5">
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="stats-icon green" style="background-color: #38a038;">
                                                    <i class="bi bi-cash-stack" style="
                                                        position: absolute;
                                                        margin-top: -8px;
                                                        margin-left: -8px;
                                                    "></i>
                                                </div>
                                            </div>
                                            <div class="col-md-8">
                                                <h6 class="text-muted font-semibold">dibayar</h6>
                                                <h6 class="font-extrabold mb-0">{{ $data_count['data_dibayar'] }}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </section>
            </div>
            <section class="row">
            
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Order</h4>
                        </div>
                        
                        <div class="card-content">
                            
                            <!-- table hover -->
                            <div class="table-responsive px-5 pb-5">
                                <table class="table table-hover mb-0" id="table_transaksi">
                                    <thead class="table-primary">
                                        <tr>
                                            <th>NO</th>
                                            <th>ID INVOICE</th>
                                            <th>NAMA CUSTOMER</th>
                                            <th>JUDUL PEKERJAAN</th>
                                            <th>JENIS ORDER LAYANAN</th>
                                            <th>STATUS</th>
                                            <th>UBAH STATUS</th>
                                            <th>OPSI</th>
                                        </tr>
                                    </thead>
                                    <tbody id="tbody-transaksi">
                                        @foreach($data as $d)
                                        <tr>
                                            <td>{{ $no++ }}</td>
                                            <th>{{ $d->id_invoice }}</th>
                                            <td>{{ $d->nama_customer }}</td>
                                            <td>{{ $d->judul_pekerjaan }}</td>
                                            <td>{{ $d->jenis_order_layanan }}</td>
                                            <td>
                                                @if($d->status == 1)
                                                    <div class="badge bg-danger">order</div>
                                                @elseif($d->status == 2)    
                                                    <div class="badge bg-info">survey</div>
                                                @elseif($d->status == 3)    
                                                    <div class="badge bg-danger">cancel</div>
                                                @elseif($d->status == 4)    
                                                    <div class="badge bg-primary">deal</div>
                                                @elseif($d->status == 5)    
                                                    <div class="badge bg-warning">dikerjakan</div>
                                                @elseif($d->status == 6)    
                                                    <div class="badge bg-success">selesai</div>
                                                @elseif($d->status == 7)    
                                                    <div class="badge bg-success">dibayar</div>
                                                @elseif($d->status == 8)    
                                                    <div class="badge bg-secondary">close</div>
                                                @endif
                                            </td>
                                            <td>
                                                <form action="{{url('/ubah_status')}}" method="POST">
                                                
                                                
                                                <input class="d-none" value="{{$d->id_transaksi}}" name="id">
                                                @csrf
                                                <select name="status" class="form-select" onchange="this.form.submit();">
                                                    @foreach($status_row as $sr)
                                                        @if($sr->id_status == $d->status)
                                                            <option selected value="{{$sr->id_status}}">{{ $sr->status }}</option>
                                                        @else
                                                            <option value="{{$sr->id_status}}">{{ $sr->status }}</option>
                                                        @endif    
                                                    @endforeach
                                                </select>
                                            </form>
                                            </td>
                                            <td>
                                                <span>

                                                    <a href="{{$d->pdf}}" hrefid="{{$d->id_transaksi}}" class="badge bg-primary lihat">lihat</a>

                                                    @if(auth()->user()->role == "2")
                                                    <form action="{{ url('hapus_transaksi') }}" method="POST" class="d-inline">
                                                        @csrf
                                                        <input class="d-none" name="id" value="{{ $d->id_transaksi }}">
                                                        <button type="button" onclick="konfirmasi_hapus(this.form)" class="badge bg-secondary btn-hapus" style="padding: 6px;
                                                        border: unset;">hapus</button>

                                                    </form>
                                                    @endif
                                                </span>
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
            <div class="modal fade" id="modal_pdf" data-backdrop="static" data-keyboard="false" tabindex="-1" aria-labelledby="staticBackdrop" aria-hidden="true">
            <div class="modal-dialog modal-fullscreen">
                <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">Detail Pesanan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <div class="container-fluid px-5" style="height: 100% !important;">
                        <div class="row" >
                            <div class="col data_detail">
                                
                            </div>
                            <div class="col" >
                                <iframe id="iframepdf" src="" width="100%" height="100%"></iframe>
                            </div>
                        </div>
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
            let url_detail = "{{url('get_detail')}}";
            let url_jml = "{{url('get_jml')}}";
        </script>
        <script src="{{asset('admin/assets/js/extensions/lihat_pdf.js')}}"></script>
        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-app.js"></script>
        <script src="https://www.gstatic.com/firebasejs/8.4.1/firebase-database.js"></script>
        <script src="{{asset('admin/assets/js/fbase.js')}}"></script>
        <script src="{{asset('admin/assets/js/transaksi.js')}}"></script>
        @include('admin/layouts/notifikasi')
        <script>
            $(document).ready(function(){
                firebase.database().ref("transaksi").on("value", function(snapshot) {
                    let flag = false;
                    let myAudio = document.getElementById("myAudio");
                    // file:///opt/lampp/htdocs/dakdok/public/admin/message_notify.mp3
                    firebase.database().ref("transaksi").on("value", function(snapshot) {
                        if (!flag) {
                            flag = true;
                        }else{
                            loadTransaksi();
                            myAudio.play();
                        }
                            
                        });
                });
                
            });
        </script>
        
        @if(session('berhasil_hapus'))
            <script>
                let msg = "{{session('berhasil_hapus')}}";
                Toastify({
                    text: msg,
                    duration: 3000,
                    close:true,
                    gravity:"top",
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
                    close:true,
                    gravity:"top",
                    position: "right",
                    backgroundColor: "#a20505",
                }).showToast();
            </script>
        @elseif(session('berhasil_update_status'))
            <script>
                let msg = "{{session('berhasil_update_status')}}";
                Toastify({
                    text: msg,
                    duration: 3000,
                    close:true,
                    gravity:"top",
                    position: "right",
                    backgroundColor: "#4fbe87",
                }).showToast();
            </script>
        @elseif(session('gagal_update_status'))
            <script>
                let msg = "{{session('gagal_update_status')}}";
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