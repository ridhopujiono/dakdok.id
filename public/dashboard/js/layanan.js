$(document).ready(function() {
// import { Modal } from 'bootstrap';
        $(document).delegate('.service-list-a', 'click', function(e) {
            e.preventDefault();
            let token = $("meta[name='csrf_token']").attr("content");
            let jenis_order = $(this).data('href');
            let judul_pekerjaan = $(this).parent().parent().find('.service-name').html();
            // console.log([data_href, judul]);
            var myModal = new bootstrap.Modal(document.getElementById('modal_konfirmasi'), {
            });
            $('.jenis_order').html(jenis_order);
            $('input[name="jenis_order"]').val(jenis_order);
            $('input[name="judul_pekerjaan"]').val(judul_pekerjaan);

            myModal.show();
            

        });
    });