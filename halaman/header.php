<header>
<nav class="navbar navbar-expand-lg navbar-light bg-light shadow">
  <a class="navbar-brand" href="<?=$base;?>">
  <img src="https://lh3.googleusercontent.com/-zQiKpfa-vPw/ZOViXp_28-I/AAAAAAAAJQQ/9suL7iGHXloLxrwtrIY3PzDZE77yYfxWACNcBGAsYHQ/h230/20230823_083505.png" alt="" width="100"></a>
  <button class="navbar-toggler p-1" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="<?=$base;?>?page=tentang">Tentang Kami</a>
        <a class="nav-link" href="<?=$base;?>?page=layanan">Layanan</a>
        <a class="nav-link" href="<?=$base;?>?page=portfolio">Portfolio</a>
        <a class="nav-link" href="<?=$base;?>?page=testimoni">Testimoni</a>
        <a class="nav-link" href="<?=$base;?>?page=kontak">Kontak</a>
      </li>
  </div>
</nav>	
</header>

<?php
if(!isset($_GET['page'])){
?>
<div class="slider-container">
  <div class="slider">
    <div class="slide" style="background-image: url('assets/images/slider1.jpg');"></div>
    <div class="slide" style="background-image: url('assets/images/slider2.jpg');"></div>
    <div class="slide" style="background-image: url('assets/images/slider3.jpg');"></div>
  </div>
</div>
<?php
}
?>
