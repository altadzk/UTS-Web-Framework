<?= $this->include('layout/header')?>
<?= $this->section("content") ?>
<!-- Begin Page Content -->
<div class="container-fluid">

    <div class="row">
        <div class="col-lg-4">
            <div class="card mb-4">
                <div class="card-body text-center">
                    <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar"
                        class="rounded-circle img-fluid" style="width: 150px;">
                    <h5 class="my-3"><?= $user['username']?></h5>
                    <p class="text-muted mb-4"><?= $user['alamat'] ?></p>
                    <div class="d-flex justify-content-center mb-2">
                        <button type="button" class="btn btn-primary">Follow</button>
                        <button type="button" class="btn btn-outline-primary ms-1">Message</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="card mb-4">
                <div class="card-body">
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Full Name</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?= $user['username']?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Tempat Lahir</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?= $user['tpt_lahir']?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Tanggal Lahir</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?= $user['tgl_lahir']?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Nomor Telepon</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?= $user['telp']?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Jenis Kelamin</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?php if ($user['jenis_kelamin'] == 0) { echo "Laki-laki"; } else { echo "Wanita"; } ?></p>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-sm-3">
                            <p class="mb-0">Address</p>
                        </div>
                        <div class="col-sm-9">
                            <p class="text-muted mb-0"><?= $user['alamat']?></p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- /.container-fluid -->

<?= $this->Endsection("content") ?>
<?= $this->include("layout/footer") ?>