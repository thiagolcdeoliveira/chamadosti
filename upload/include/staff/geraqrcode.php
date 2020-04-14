<?php 
id=$_GET['id'];
include('phpqrcode/qrlib.php');
QRcode::png("http://www.botecodigital.info", "QR_code.png");

?>