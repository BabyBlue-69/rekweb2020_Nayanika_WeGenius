<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <h2 class="mt-2">Detail handphone</h2>
        <div class="card mb-3" style="max-width: 1000px;">
            <div class="row no-gutters">
                <div class="col-md-4">
                <img src="/img/<?= $handphone['foto']; ?>" class="card-img" alt="...">
                </div>
                <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title"><?= $handphone['merk']; ?></h5>
                    <p class="card-text"><b>Layar : </b><?= $handphone['layar']; ?></p>
                    <p class="card-text"><b>Kamera : </b><?= $handphone['kamera']; ?></p>
                    <p class="card-text"><b>Video : </b><?= $handphone['video']; ?></p>
                    <p class="card-text"><b>Baterai : </b><?= $handphone['baterai']; ?></p>
                    <p class="card-text"><b>Penyimpanan : </b><?= $handphone['penyimpanan']; ?></p>

                    <a href="/handphone/edit/<?= $handphone['slug']; ?>" class="btn btn-warning">Edit</a>

                    <form action="/handphone/<?= $handphone['id']; ?>" method="post" class="d-inline">
                        <?= csrf_field(); ?>
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah Anda Yakin?'); ">Delete</button>
                    </form>
                    <br><br>
                    <a href="/handphone">Kembali ke daftar handphone</a>
                </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>