
    $(document).ready(function() {
        // inisiasi select
        let jenis_order = $('.jenis_order');
        jenis_order.on('change', function(){
            var label = $(this).find(':selected').closest('optgroup').attr('label');
            $('input[name="judul_pekerjaan"]').val(label);
            // console.log(label);
        });

        

        // Ketika tombol tambah di klik
        let btn_tambah= $('.btn_tambah');
        let container_detail_keterangan= $('.container_detail_keterangan');

        btn_tambah.click(function(){
            container_detail_keterangan.append(`
                <div>
                <hr>
                <label for="detail_pekerjaan">Detail Pekerjaan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                                <textarea name="detail_pekerjaan[]" id="detail_pekerjaan" type="text" class="form-control"></textarea>
                <label for="keterangan">Keterangan <span style="color:red; margin-top: -5px; font-size: 12px">*</span></label>
                                <textarea name="keterangan[]" id="keterangan" type="text" class="form-control"></textarea>
                <button type="button" class="btn btn-light btn_close mb-3">hapus</button>
                </div>
            `);
        });
    });
    // ketika tombol hapus di klik
    $(document).delegate('.btn_close', 'click', function(event) {
        $(this).parent().remove();
    });

    