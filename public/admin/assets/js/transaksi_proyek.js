function loadTransaksiProyek(){
    let csrf_token = $("meta[name='csrf_token']").attr('content');
    let html = ``;
    let html2 = ``;
    // let data_section_count = ``;
    let no = 1;
   
    $.ajax({
        type: "POST",
        url: url_transaksi_proyek,
        data: {
            _token: csrf_token
        },
        success: function (response) {
            $.each(response[0], function(i, val){
                html += `<tr>
                            <td>${no++} </td>
                            <th>${val.id_invoice}</th>
                            <td>${val.nama_customer}</td>
                            <td>${val.jenis_order_proyek}</td>
                            <td>`;

                                if(val.status == 1){

                                    html += `<div class="badge bg-danger">order</div>`;
                                }
                                else if(val.status == 2){
                                    html += `<div class="badge bg-info">survey</div>`;
                                }    
                                else if(val.status == 3){
                                    html += `<div class="badge bg-danger">cancel</div>`;
                                }    
                                else if(val.status == 4){
                                    html += `<div class="badge bg-primary">deal</div>`;
                                }    
                                else if(val.status == 5){

                                    html += `<div class="badge bg-warning">dikerjakan</div>`;
                                }    
                                else if(val.status == 6){

                                    html += `<div class="badge bg-success">selesai</div>`;
                                }    
                                else if(val.status == 7){

                                    html += `<div class="badge bg-success">dibayar</div>`;
                                }    
                                else if(val.status == 8){

                                    html += `<div class="badge bg-secondary">close</div>`;
                                }
                                html += `    
                                
                            </td>
                            <td>
                                <form action="${ubah_status_proyek}" method="POST">
                                
                                
                                <input class="d-none" value="${val.id_transaksi_proyek}" name="id">
                                <input type="hidden" name="_token" value="${csrf_token}">
                                <select name="status" class="form-select" onchange="this.form.submit();">`;
                                
                                $.each(response[1], function(j, sr){
                                        if(sr.id_status == val.status){
                                            html += `
                                            <option selected value="${sr.id_status}">${sr.status}</option>
                                            `;
                                        }else{
                                            html += `
                                                <option value="${sr.id_status}">${sr.status}</option>`;

                                        }
                                    });
                                    html += `
                                </select>
                            </form>
                            </td>
                            <td>
                                <span>

                                    <a href="${val.pdf}" hrefid="${val.id_transaksi_proyek}" class="badge bg-primary lihat">lihat</a>

                                    <form action="${url_hapus_proyek}" method="POST">
                                        <input type="hidden" name="_token" value="${csrf_token}">
                                        <input class="d-none" name="id" value="${val.id_transaksi_proyek}">
                                        <button type="button" onclick="konfirmasi_hapus(this.form)" class="badge bg-secondary btn-hapus" style="padding: 6px;
                                        border: unset;">hapus</button>

                                    </form>
                                </span>
                            </td>
                        </tr>`;
            });
            html2 += `
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
                                                <h6 class="font-extrabold mb-0">${response[2].data_order}</h6>
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
                                                <h6 class="font-extrabold mb-0">${response[2].data_survey}</h6>
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
                                                <h6 class="font-extrabold mb-0">${response[2].data_deal}</h6>
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
                                                <h6 class="font-extrabold mb-0">${response[2].data_dikerjakan}</h6>
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
                                                <h6 class="font-extrabold mb-0">${response[2].data_selesai}</h6>
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
                                                <h6 class="font-extrabold mb-0">${response[2].data_dibayar}</h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </section>
            `;
            // console.log(html2);
            $('.data_jml').html(html2);
            $('#tbody-transaksi').html(html);
        }, 
        error: function(error){
            console.log(error);
        }
    });
    
}











