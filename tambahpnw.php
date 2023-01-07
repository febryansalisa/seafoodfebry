<?php
include 'function.php';
if(isset($_POST['submit'])){
    $id_katalog=$_POST['id_katalog'];
    $id_pegawai=$_POST['id_pegawai'];
    $tgl_penawaran=$_POST['tgl_penawaran'];

    $sql= "insert into penawaran(id_katalog,id_pegawai,tgl_penawaran) values('$id_katalog','$id_pegawai','$tgl_penawaran')";

    $result=mysqli_query($db, $sql);

    if($result){
        header("Location:penawaran.php?pesan=sukses");
    }
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Tambah Penawaran</title>
</head>

<body>
    <br>
    <br>
    <center><h3>Tambah Penawaran</h3></center>
    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Id katalog</label>
                <div>
                    <select name="id_katalog" id="id_katalog" class="form-control">
                        <?php
                            include 'function.php';
                            $getIDKatalog = mysqli_query($db, "SELECT * FROM detail_katalog");
                            while ($selectKatalog = mysqli_fetch_array($getIDKatalog)){
                        ?>
                        <option value="<?php echo $selectKatalog['id_katalog']; ?>" >
                        <?php echo $selectKatalog['id_katalog']; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Id pegawai</label>
                <div>
                    <select name="id_pegawai" id="id_pegawai" class="form-control">
                        <?php
                            include 'function.php';
                            $getPegawai = mysqli_query($db, "SELECT * FROM pegawai");
                            while ($selectPegawai = mysqli_fetch_array($getPegawai)){
                        ?>
                        <option value="<?php echo $selectPegawai['id_pegawai']; ?>" >
                        <?php echo $selectPegawai['nama_pegawai']; ?></option>
                        <?php
                            }
                        ?>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label>Tgl penawaran</label>
                <input type="date" class="form-control" placeholder="Masukkan tanggal" name="tgl_penawaran" id="tgl_penawaran">
            </div>
            <button type="submit" class="btn btn-primary"  name="submit">Submit</button>
    </div>


</body>

</html>