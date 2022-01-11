
            $(document).delegate('.lihat','click', (e)=>{
                e.preventDefault();
                var modal_pdf = new bootstrap.Modal(document.getElementById('modal_pdf'));
                

                
                let lihat = $('.lihat');
                // console.log($(e.target).attr('hrefid'))
                
                // lihat.on('click',(e)=>{
                    let id = $(e.target).attr('hrefid');
                    console.log(id);

                    $.ajax({
                        type: "POST",
                        data: {
                            id: id,
                            _token: $('meta[name="csrf_token"]').attr("content")
                        },
                        url: url_detail,
                        success: function (response) {
                            console.log(response);
                            $('.data_detail').html(`
                                <p>
                                    <strong>Nama Customer:</strong><br>
                                    ${response[0].nama_customer}
                                </p>
                                <p>
                                    <strong>Alamat Customer:</strong><br>
                                    ${response[0].alamat_lengkap}
                                </p>
                                <p>
                                    <strong>No. Telp:</strong><br>
                                    ${response[0].no_hp}
                                </p>
                                <p>
                                    <strong>Jenis Order Layanan:</strong><br>
                                    ${response[0].jenis_order_layanan}
                                </p>
                                <p>
                                    <strong>Judul Pekerjaan:</strong><br>
                                    ${response[0].judul_pekerjaan}
                                </p>
                                <p>
                                    <strong>Deskripsi Pekerjaan:</strong><br>
                                    ${response[0].deskripsi_pekerjaan}
                                </p>
                                <p>
                                    <strong>Lokasi Pekerjaan:</strong><br>
                                    ${response[0].lokasi_pekerjaan}
                                </p>
                                <p>
                                    <strong>Kontak Penerima:</strong><br>
                                    ${response[0].kontak_penerima}
                                </p>
                                `
                                
                                );
                        },
                        error: function(err){
                            console.log(err);
                        }
                    });
                    $('#iframepdf').attr('src', url + "/" + $(e.target).attr("href"));
                    modal_pdf.show();
                // });
            });

            function konfirmasi_hapus(form){
                let konfirmasi = confirm("Apakah anda ingin menghapus data ini?");
                if(konfirmasi){
                    form.submit();
                }else{
                    return false;
                }
            }
            let table_transaksi = document.querySelector('#table_transaksi');
            let dataTable = new simpleDatatables.DataTable(table_transaksi, {
                "lengthChange": false
            });