
	<?php
    $url = file_get_contents('https://api.kawalcorona.com/indonesia');
    $data = json_decode($url, true);
    ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<header class="jumbotron">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="h1">About us</h1>
                </div>
            </div>
        </div>
    </header>

<div class="container">
        <div class="row">
            <div class="col-md-12 card">
                <div class="card-body">
                    <h3>NWG E-Store</h3>
                    <p>NWG E-Center bertujuan untuk memberikan informasi seputar produk elektronik yang ada di pasaran </p>
                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>

    <div class="jumbotron jumbotron-fluid mt-5 mb-0" style="background-color: black;">
		<div class="main-content">
      <div class="left-box col-sm-4 mt-2">
        <h4>📋 NWG E-Center </h4>
        <div class="content">
          <p>NWG E-Center bertujuan untuk memberikan informasi seputar produk elektronik yang ada di pasaran</p>

        </div>
      </div>
      <div class="left-box col-sm-4 mt-2">
        <h4>Indonesia Corona Virus</h4>
        <div class="content">
          <ul ">
            <li>Positif : <?= $data[0]['positif']; ?> orang. </li> 
            <li>Dirawat : <?= $data[0]['dirawat']; ?> orang. </li> 
            <li>Sembuh : <?= $data[0]['sembuh']; ?> orang. </li> 
            <li>Meninggal : <?= $data[0]['meninggal']; ?> orang. </li> 
			</ul> 
		</div> 
	</div> 
	<div class=" left-box col-sm-4 mt-2">
              <h4>Contact Us</h4>
              <div class="content">
            <p><ul>
            <li>Rumah Jl.Sumur No. 123 Bandung</li> 
            <li>Kantor Jl.Abc No. 123 Bandung</li> 
			</ul> </p>
              </div>

        </div>
	  </div>

      <p class="text-center">Copyright © 2020 NWG E-Center. All Right Reserved</p>

<?= $this->endSection(); ?>