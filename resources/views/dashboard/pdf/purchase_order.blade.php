<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- CSS only -->
<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" >
-->	
<title>Puchase Order Dakdok.id</title>
</head>
<body>



	<style type="text/css">
		*{
			font-family: arial, sans-serif;
		}
		table tr td,
		table tr th{
			font-size: 11pt;
		}
		h3{
			text-decoration: underline;
			font-weight: bold;
		}
		td, th{
			vertical-align: top;
		}
			/*html{
			margin-left: 151px;
			margin-right: 113px;

			}*/
			
		</style>
		<center>
			<h3>PURCHASE ORDER</h3>
			<p style="margin-top: -5px; font-style: italic;font-size: 13pt">{{$id_invoice}}</p>
		</center>
		<table class='table' border="0" style="border-bottom: none;">
			<thead>
				<tr style="border-style: hidden;">
					<td width="20%"></td>
					<td width="25%"></td>
					<td width="10%"></td>
					<td width="20%">
						Tanggal Order layanan
					</td>
					<td width="25%" style="padding-bottom: 20px;">
						: {{$tanggal}}
					</td>
				</tr>
				<tr style="border-style: hidden;">
					<td width="20%">Nama Customer</td>
					<td width="25%" style="padding-right: 20px;">: <b>{{$nama_customer}}</b></td>
					<td width="10%"></td>
					<td width="20%">
						Waktu Order
					</td>
					<td width="25%">
						: {{$waktu2}} - {{$waktu}}
					</td>
				</tr>
				<tr style="border-style: hidden;">
					<td width="20%">Alamat Customer</td>
					<td width="25%" style="padding-right: 20px;">: {{$alamat_lengkap}}</td>
					<td width="10%">&nbsp;</td>
					<td width="20%">
						Lokasi Pekerjaan
					</td>
					<td width="25%">
						: {{$lokasi_pekerjaan}}
					</td>
				</tr>
				<tr style="border-style: hidden;">
					<td width="20%">No. HP / Whatsapp</td>
					<td width="25%">: {{$no_hp}}</td>
					<td width="10%"></td>
					<td width="20%">
						Kontak Penerima Layanan
					</td>
					<td width="25%">
						: {{$kontak_penerima}}
					</td>
				</tr>
				<tr style="border-style: hidden;">
					<td width="20%">Jenis Order Layanan</td>
					<td width="25%" style="padding-right: 20px;">: {{$jenis_order}}</td>
					<td width="10%"></td>
					<td width="20%">
						
					</td>
					<td width="25%">
						
					</td>
				</tr>
			</thead>
		</table>
		<table class='table' border="0" style="border-bottom: none; margin-top: 10px">
			<thead>
				<tr style="border-style: hidden;">
					<td width="100%"><b>Judul Pekerjaan</b></td>
				</td>
			</tr>
			<tr style="border-style: hidden;">
				<td width="100%"> {{$judul_pekerjaan}}<br></td>
			</td>
		</tr>
		<tr style="border-style: hidden;">
			<td></td>
		</tr>

		<tr style="border-style: hidden;">
			<td width="100%"><b>Deskripsi Pekerjaan</b></td>
		</td>
	</tr>
	<tr style="border-style: hidden;">
		<td width="100%">{{$deskripsi_pekerjaan}}</td>
	</td>
</tr>
</thead>
</table>
<style type="text/css">
 		/*td .td_data, th .th_data{
 			border: 1px solid #000 !important;
 		}
 		table .my_table{
 			border-collapse: collapse !important;
 			}*/
 		</style>
 		<table border="1" width="100%" cellspacing="0" style="margin-top: 10px">
 			<thead>
 				<tr >
 					<th width="10%" style="vertical-align: middle;">No</th>
 					<th width="40%" style="vertical-align: middle;">Detail Pekerjaan</th>
 					<th width="20%" style="vertical-align: middle;">Luas / Ukuran Objek yang dikerjakan</th>
 					<th width="30%" style="vertical-align: middle;">Keterangan</th>
 					
 				</tr>
 			</thead>
 			<tbody>
 				
 				<!-- loop -->
 				@php
 				$i = 0;
 				@endphp

 				@for($i; $i < count($detail_pekerjaan); $i++)
 				<tr>
 					<td width="10%" height="40px" style="vertical-align: middle; text-align: center;">{{$i+1}}</td>
 					<td width="40%" style="vertical-align: middle; text-align: center;">{{$detail_pekerjaan[$i]}}</td>
 					<td width="15%" style="vertical-align: middle; text-align: center;"></td>
 					<td width="35%" style="vertical-align: middle; text-align: center;">{{$keterangan[$i]}}</td>
 				</tr>
 				@endfor
 				<tr height="50px">
 					<td>&nbsp; <br>&nbsp;</td>
 					<td>&nbsp; <br>&nbsp;</td>
 					<td>&nbsp; <br>&nbsp;</td>
 					<td>&nbsp; <br>&nbsp;</td>
 				</tr>
 				<tr height="50px">
 					<td>&nbsp; <br>&nbsp;</td>
 					<td>&nbsp; <br>&nbsp;</td>
 					<td>&nbsp; <br>&nbsp;</td>
 					<td>&nbsp; <br>&nbsp;</td>
 				</tr>
 				<tr height="50px">
 					<td>&nbsp; <br>&nbsp;</td>
 					<td>&nbsp; <br>&nbsp;</td>
 					<td>&nbsp; <br>&nbsp;</td>
 					<td>&nbsp; <br>&nbsp;</td>
 				</tr>
 			</tbody>
 		</table>

 		<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" > -->
 		<div style="font-size: 11pt">
 			<p>Catatan</p>
 			<div style="margin-left: 25px;">
 				<p>1. akan dilakukan setelah surveyor melakukan survey di lokasi pekerjaan dan disepakati biaya pekerjaan sesuai tarif yang berlaku</p>
 				<p>2. Customer melakukan pembayaran biaya survey sebesar Rp 10.000,- untuk area Tuban (kota) dan Rp. 15.000,- di luar Tuban (kota), dengan metode transfer atau dibayarkan langsung saat surveyor datang ke lokasi.</p>
 			</div>
 			
 		</div>

 		<div class="container-fluid">
 			<div class="row ">
 				<div class="col"></div>
 				<div class="col"></div>
 				<div class="col"></div>
 				<div class="col"></div>
 				<div class="col" style="text-align: right;">
 					<p><b>Tuban, 2021</b></p>
 					<p>Hormat Kami, </p>
 					<br>
 					<p>({{$nama_customer}})</p>
 				</div>
 			</div>
 		</div>
 		<!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>	-->
 	</body>
 	</html>