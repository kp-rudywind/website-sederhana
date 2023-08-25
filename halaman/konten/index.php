<?php
if(isset($_GET['page'])) {
	$halaman = $_GET['page'];
	switch ($halaman) {
	  case "tentang":
	  include('tentang.php');
	  break;
	  
	  case "layanan":
	  include('layanan.php');
	  break;
	  
	  case "portfolio":
	  include('portfolio.php');
	  break;
	  
	  case "harga":
	  include('harga.php');
	  break;
	  
	  case "testimoni":
	  include('testimoni.php');
	  break;
	  
	  case "kontak":
	  include('kontak.php');
	  break;	  
	  
	  default:
	  header('Location:'.$base.'404.php');
	}
	  
} else {
	include('default.php');
}
?>
