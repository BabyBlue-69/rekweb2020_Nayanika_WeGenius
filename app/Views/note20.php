<?php
    $url = file_get_contents('https://api.kawalcorona.com/indonesia');
    $data = json_decode($url, true);
    ?>
<!DOCTYPE html>
<html>

<head>
  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
  <link rel="stylesheet" href="/css/style.css">

  <link rel="stylesheet" type="text/css" href="../../css/materialize.css">
  <link rel="stylesheet" type="text/css" href="../../css/parallax.css">


  <!--Let browser know website is optimized for mobile-->
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <title class="material-icons store">NWG Mobile</title>

</head>

<body class="home page-template page-template-blank page">

  <!-- navbar -->

  <nav class="navbar navbar-expand-lg navbar-light bg-transparent">
    <div class="container">
      <a class="navbar-brand" href="<?= base_url() ?>">Home</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

          <li class="nav-item left">
          </li>
        </ul>
      </div>
    </div>
  </nav>



  <!-- Xnavbar -->

  <!-- parallax -->

  <div class="section">
    <div class="hoverable">
      <div><img src="../../img/produk/note20.jpeg">
        <!-- <div class="content">
            <h1 class="center-align">Selamat Datang di Nayanika WeGenius Shop</h1> 
         </div> -->
      </div>


    </div>
  </div>


  <!-- akhir parallax -->



  <!-- parallax -->

  <div class="section">
    <div class="hoverable">
      <div><img src="../../img/produk/note202.jpg">
        <!-- <div class="content">
              <h1 class="center-align">Selamat Datang di Nayanika WeGenius Shop</h1> 
           </div> -->
      </div>


    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="col-md-12 my-2 card">
        <div class="card-body">
          <table class="table table-hover">
            <thead>
              <tr>
                <th scope="col">Specification</th>
                <th scope="col"></th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <th scope="row"> 📱 Layar</th>
                <td>Super AMOLED+, HDR 10+</td>
                <td>6,7'</td>
                <td>1080 x 2400 (393 ppi)</td>
              </tr>
              <tr>
                <th scope="row"> 📷 Kamera</th>
                <td>12 MP (Wide)</td>
                <td>64 MP (telephoto)</td>
                <td>12 MP (ultrawide)</td>
              </tr>
              <tr>
                <th scope="row"> 📽 Video</th>
                <td>8K@24fps</td>
                <td>4K@30/60fps</td>
                <td>1080p@30/60/240fps</td>
              </tr>
              <tr>
                <th scope="row"> 🔋 Baterai</th>
                <td colspan="2">Li-Ion 4300mAh</td>
                <td>Fast Charging 25W</td>
              </tr>
              <tr>
                <th scope="row"> 💾 Penyimpanan</th>
                <td colspan="2">256GB Storage</td>
                <td>8GB RAM</td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>


  <!-- akhir parallax -->

  <!-- <div class="section">
    <div class="container">
      <h5 class="text-bold">Specification</h5>
      <table class="highlight">
        <thead>
          <tr>
            <th></th>
            <th></th>
            <th></th>
            <th></th>
          </tr>
        </thead>

        <tbody>
          <tr>
            <td>Warna</td>
            <td>Note 20 Ultra (512)<p>Mystic Bronze, Mystic White, Mystic Black</p><br>Note 20 Ultra (256)<p>Mystic Bronze, Mystic Black</p>
            </td>
            <td>Note 20<p>Mystic Grey, Mystic Green, Mystic Bronze</p>
            </td>
          </tr>
          <tr>
            <td>Prosesor </td>
            <td>
              <p class="text-bold">CPU Speed</p>
              <p>2.73GHz, 2.5GHz, 2GHz</p>
            </td>
            <td>
              <p>CPU Type</p>
              <p>Octa-Core</p>
            </td>
          </tr>
          <tr>
            <td>Display</td>
            <td>
              <p>Size (Main Dipslay)</p>
              <p>174.5mm (6.9" full rectangle) / 173.3mm (6.8" rounded corners)</p><br>
              <p>Teknologi</p>
              <p>Dynamic Amoled 2X</p>
            </td>
            <td>
              <p>Resolusi</p>
              <p>3088 x 1440 (Quad HD+)</p><br>
              <p>Kedalaman Warna</p>
              <p>16M</p>
            </td>
          </tr>
          <tr>
            <td>Dukungan S-Pen</td>
            <td>Ya (Gerakan dan Remote Control)</td>
            <td></td>
          </tr>
          <tr>
            <td>Kamera</td>
            <td>Rear Camera - Resolution (Multiple)
              <p>108.0 MP + 12.0 MP + 12.0 MP</p>
              <br>
              Main Camera - Auto Focus
              <p>Yes</p>
              <br>
              Rear Camera - Zoom
              <p>Optical Zoom at 5x , Digital Zoom up to 50x</p>
              <br>
              Camera - F Number
              <p>F2.2</p>
              <br>
              Main Camera - Flash
              <p>Yes</p>
              <br>
              Resolusi Rekaman Video
              <p>UHD 8K (7680 x 4320) @24fps</p>
            </td>
            <td>Rear Camera - F Number (Multiple)
              <p>F1.8 , F2.2 , F3.0</p>
              <br>
              Rear Camera - OIS
              <p>Yes</p>
              <br>
              Front Camera - Resolution
              <p>10.0 MP</p>
              <br>
              Front Camera - Auto Focus
              <p>Yes</p>
              <br>
              Rear Camera - Laser AF Sensor
              <p>Yes</p>
              <br>
              Slow Motion
              <p>960fps @HD, 240fps @FHD</p>
            </td>
          </tr>
          <tr>
            <td>Memori</td>
            <td>RAM Size (GB)
              <p>8</p>
              <br>
              Available Memory (GB)*
              <p>221.6</p>
            </td>
            <td>ROM Size (GB)
              <P>256</P>
              <br>
              Dukungan Memori Eksternal
              <p>MicroSD (Up to 1TB)</p>
            </td>
          </tr>
          <tr>
            <td>Jaringan</td>
            <td>JUMLAH SIM
              <p>Dual-SIM</p>
              <br>
              SIM Slot Type
              <p>SIM 1 + Hybrid (SIM or MicroSD) or Embedded SIM</p>
              <br>
              2G GSM
              <p>GSM850, GSM900, DCS1800, PCS1900</p>
              <br>
              4G FDD LTE
              <p>B1(2100), B2(1900), B3(1800), B4(AWS), B5(850), B7(2600),</p>
              <p>B8(900), B12(700), B13(700), B17(700), B18(800), B19(800),</p>
              <p>B20(800), B25(1900), B26(850), B28(700), B32(1500), B66(AWS-3)</p>
            </td>
            <td>SIM size
              <p>Nano-SIM (4FF), Embedded-SIM</p>
              <br>
              Infra
              <p>2G GSM, 3G WCDMA, 4G LTE FDD, 4G LTE TDD</p>
              <br>
              3G UMTS
              <p>B1(2100), B2(1900), B4(AWS), B5(850), B8(900)</p>
              <br>
              4G TDD LTE
              <p>B38(2600), B39(1900), B40(2300), B41(2500)</p>
            </td>
          </tr>
          <tr>
            <td>Sensor</td>
            <td>Accelerometer, Barometer, Fingerprint Sensor, Gyro Sensor, Geomagnetic Sensor, Hall Sensor, Light Sensor, Proximity Sensor</td>
            <td></td>
          </tr>
        </tbody>
      </table>
    </div>

  </div> -->

  <!-- slideShow -->

  <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
      <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="<?php base_url(); ?> img/slider/slider 1-01.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php base_url(); ?> img/slider/slider 2-01.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php base_url(); ?> img/slider/slider 3-01.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php base_url(); ?> img/slider/slider 4-01.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php base_url(); ?> img/slider/slider 5-01.jpeg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block">
          <h5></h5>
          <p></p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

  <!-- XslideShow -->




  <!-- footer -->
  <div class="jumbotron jumbotron-fluid mt-5 mb-0" style="background-color: black;">
		<div class="main-content">
      <div class="left-box col-sm-4 mt-2">
        <h4>📋 NWG E-Center </h4>
        <div class="content">
          <p>NWG E-Center bertujuan untuk memberikan informasi seputar produk elektronik yang ada di pasaran </p>

        </div>
      </div>
      <div class="left-box col-sm-4 mt-2">
        <h4>Indonesia Corona Virus</h4>
        <div class="content">
          <ul >
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
			</ul></p>
              </div>

        </div>
	  </div>

      <p class="text-center">Copyright © 2020 NWG E-Center. All Right Reserved</p>
  <!-- Xfooter -->




  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  <!-- Option 2: jQuery, Popper.js, and Bootstrap JS
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>
    -->

</body>

</html>