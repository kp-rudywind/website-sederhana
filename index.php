<?php
require('library/config.php');
?>


<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/style.css?<?=time();?>">
    <title>Hello, world!</title>
  </head>
  <body>
  	
  	
  	<!-- HEADER -->
  	<?php
  	include('halaman/header.php');
  	?>
  	
  	
  	
  	
  	<!-- KONTEN -->
  	<?php
  	include('halaman/konten/index.php');
  	?>

    
   
   
   <!-- FOOTER -->
   <?php
  	include('halaman/footer.php');
  	?>
    
    
    
    
    
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="assets/script.js"></script>
  </body>
</html>
