let table_iklan = document.querySelector('#table_iklan');
            let dataTable = new simpleDatatables.DataTable(table_iklan, {
                "lengthChange": false
});

function konfirmasi_hapus(form){
    let konfirmasi = confirm("Apakah anda ingin menghapus data ini?");
        if(konfirmasi){
            form.submit();
        }else{
            return false;
        }
}