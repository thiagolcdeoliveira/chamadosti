<?php 

// id=$_GET['id'];
$id = $_GET['id'];
include('../phpqrcode/qrlib.php');
echo 'id';
echo $id;
QRcode::png("http://localhost/chamadosti/upload/scp/tickets.php?id=$id", "QR_code.png");
//("QR_code.png")
// return 'QR_code.png''
?>
<img src="QR_code.png">
