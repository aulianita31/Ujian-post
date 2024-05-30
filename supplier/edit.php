<?php include_once('header.php'); ?>

<div class="container mt-2">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header row">
                    <div class="card-title h3 col-8">Edit Data supplier</div>
                    <div class="col-4">
                        <a href="?m=supplier&s=view" class="btn btn-lg btn-secondary float-end">Kembali</a>
                    </div>
                </div>

                <?php
                include_once('setting.php');
                $id = $_GET['id'];
                $sql = "SELECT * FROM supplier WHERE id='$id'";
                $result = mysqli_query($koneksi, $sql);
                $r = mysqli_fetch_assoc($result);
                ?>

                <div class="card-body">
                    <form action="?m=supplier&s=update" method="post">
                        <div class="mb-3">
                          <input type="text" name="nama" class="form-control" value="<?php echo $r['nama']; ?>" placeholder="Nama supplier" required>
                        </div>
                        <div class="mb-3">
                          <textarea name="alamat" class="form-control" cols="30" rows="10"  placeholder="Alamat"></textarea>
                        </div>
                        <div class="mb-3">
                          <input type="text" name="hp" class="form-control" value="<?=$r['hp']?>" placeholder="Hp" required>
                        </div>
                        <div class="mb-3">
                          <input type="text" name="email" class="form-control" value="<?=$r['email']?>" placeholder="Email" required>
                        </div>
                        <div class="mb-3">
                          <input type="hidden" name="id" value="<?=$r['id']?>" >
                          <input type="reset" class="btn btn-secondary">&nbsp;
                          <input type="submit" value="update" class="btn btn-primary" name="update">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include_once('footer.php'); ?>