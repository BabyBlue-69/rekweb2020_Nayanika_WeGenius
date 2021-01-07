<?php
    $url = file_get_contents('https://api.kawalcorona.com/indonesia');
    $data = json_decode($url, true);
    ?>
<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
            <a href="/handphone/create" class="btn btn-primary mt-3">Tambah Data Handphone</a>
            <h1 class="mt-2">Daftar Handphone</h1>
            <?php if(session()->getFlashdata('pesan')) : ?>
              <div class="alert alert-success" role="alert">
                <?= session()->getFlashdata('pesan'); ?>
              </div>
            <?php endif; ?>
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Foto</th>
      <th scope="col">Merk</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $i = 1; ?>
      <?php foreach($handphone as $h) : ?>
    <tr>
      <th scope="row"><?= $i++; ?></th>
      <td><img src="/img/<?= $h['foto']; ?>" alt="" class="foto"></td>
      <td><?= $h['merk']; ?></td>
      <td>
          <a href="/handphone/<?= $h['slug']; ?>" class="btn btn-success">Detail</a>
      </td>
    </tr>
   <?php endforeach; ?>
  </tbody>
</table>    
        </div>
    </div>
</div>

<div class="jumbotron jumbotron-fluid mt-5 mb-0" style="background-color: black;">
		<div class="main-content">
      <div class="left-box col-sm-4 mt-2">
        <h4>📋 NWG E-Center </h4>
        <div class="content">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste repellat enim odit nobis eveniet rem, excepturi quia iusto consequuntur quisquam ullam consectetur debitis deleniti itaque consequatur laboriosam. </p>

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
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iste repellat enim odit nobis eveniet rem.</p>
              </div>

        </div>
	  </div>

      <p class="text-center">Copyright © 2020 NWG E-Center. All Right Reserved</p>

<?= $this->endSection(); ?>