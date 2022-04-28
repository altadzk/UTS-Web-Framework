<?= $this->include('layout/header')?>
<?= $this->section("content") ?>
<!-- Begin Page Content -->
<div class="container-fluid">

<table class="table">
  <thead class="bg-primary text-white">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nama</th>
      <th scope="col">Alamat</th>
      <th scope="col">Tpt Lahir</th>
      <th scope="col">Tgl Lahir</th>
      <th scope="col">Jenis Kelamin</th>
      <th scope="col">No Telp</th>
      <th scope="col">Aksi</th>
    </tr>
  </thead>
  <tbody>
      <?php $x = 1 ; foreach($users as $user):?>
    <tr>
      <th scope="row"><?= $x ?></th>
      <td><?= $user['username']?></td>
        <td><?= $user['alamat']?></td>
        <td><?= $user['tpt_lahir']?></td>
        <td><?= $user['tgl_lahir']?></td>
        <td><?php if ($user['jenis_kelamin'] == 0) { echo "Pria"; } else { echo "Wanita"; } ?></td>
        <td><?= $user['telp']?></td>
        <td>
            <a href="<?= base_url()?>/user/detail/<?= $user['username']?>" class="btn btn-primary">Detail</a>
            <a href="<?= base_url()?>/user/edit/<?= $user['username']?>" class="btn btn-warning">Edit</a>
            <a href="<?= base_url()?>/user/hapus/<?= $user['username']?>" class="btn btn-danger">Hapus</a>
    </tr>
    <?php $x ++ ; endforeach?>
  </tbody>
</table>

</div>
<!-- /.container-fluid -->

<?= $this->Endsection("content") ?>
<?= $this->include("layout/footer") ?>