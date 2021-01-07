<?= $this->extend('layout/template'); ?>

<?= $this->section('content'); ?>
<div class="container">
    <div class="row">
        <div class="col">
        <h2 class="my-3">Form Tambah Data Handphone</h2>

        <form action="/handphone/save" method="post" enctype="multipart/form-data">
        <?= csrf_field(); ?> 
        <div class="row mb-3">
            <label for="merk" class="col-sm-2 col-form-label">Merk</label>
            <div class="col-sm-10">
            <input type="text" class="form-control <?= ($validation->hasError('merk')) ?  'is-invalid' : ''; ?>" id="merk" name="merk" autofocus value="<?= old('merk'); ?>">
            <div class="invalid-feedback">
             <?= $validation->getError('merk'); ?>
            </div>
            </div>
        </div>
        <div class="row mb-3">
            <label for="layar" class="col-sm-2 col-form-label">Layar</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="layar" name="layar" value="<?= old('layar'); ?>">
            </div>
        </div>
       <div class="row mb-3">
            <label for="kamera" class="col-sm-2 col-form-label">Kamera</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="kamera" name="kamera" value="<?= old('kamera'); ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="video" class="col-sm-2 col-form-label">Video</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="video" name="video" value="<?= old('video'); ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="baterai" class="col-sm-2 col-form-label">Baterai</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="baterai" name="baterai" value="<?= old('baterai'); ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="penyimpanan" class="col-sm-2 col-form-label">Penyimpanan</label>
            <div class="col-sm-10">
            <input type="text" class="form-control" id="penyimpanan" name="penyimpanan" value="<?= old('penyimpanan'); ?>">
            </div>
        </div>
        <div class="row mb-3">
            <label for="foto" class="col-sm-2 col-form-label">Foto</label>
            <div class="col-sm-2">
                <img src="/img/default.png" class="img-thumbnail img-preview">
            </div>
            <div class="col-sm-8">
            <div class="custom-file">
                <input class="form-control <?= ($validation->hasError('foto')) ?  'is-invalid' : ''; ?>" type="file" id="foto" name="foto" onchange="previewImg()">
                <div class="invalid-feedback">
                    <?= $validation->getError('foto'); ?>
                    </div>
                </div>
            </div> 
        </div>
        <div class="row mb-3">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
        </div>
        </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>