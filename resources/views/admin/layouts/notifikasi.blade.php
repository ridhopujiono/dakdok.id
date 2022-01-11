<script>
    $(document).ready(function(){
        let flag = false;
        let flag1 = false;
        let myAudio = document.getElementById("myAudio");
        // file:///opt/lampp/htdocs/dakdok/public/admin/message_notify.mp3
        firebase.database().ref("transaksi").on("value", function(snapshot) {
            if (!flag) {
                flag = true;
            }else{
                let msg = "Ada order layanan masuk";
                Toastify({
                    text: msg,
                    duration: 30000,
                    close:true,
                    gravity:"top",
                    position: "right",
                    backgroundColor: "#4fbe87",
                }).showToast();
                myAudio.play();
                $('.link_dashboard').append(`<span class="badge" style="position: absolute;
                                left: 0px;
                                font-size: 22px;
                                color: yellow;
                                text-shadow: 1px 1px #5e5e5e;
                                font-weight: bold;">*</span>`);
            }
                
            });

            

            firebase.database().ref("transaksi_proyek").on("value", function(snapshot) {
            if (!flag1) {
                flag1 = true;
            }else{
                let msg = "Ada order proyek masuk";
                Toastify({
                    text: msg,
                    duration: 30000,
                    close:true,
                    gravity:"top",
                    position: "right",
                    backgroundColor: "#4fbe87",
                }).showToast();
                myAudio.play();
                $('.link_proyek').append(`<span class="badge" style="position: absolute;
                                left: 0px;
                                font-size: 22px;
                                color: yellow;
                                text-shadow: 1px 1px #5e5e5e;
                                font-weight: bold;">*</span>`);
            }
                
            });
            
    });
    
</script>