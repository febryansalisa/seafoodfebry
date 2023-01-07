<?php
include 'function.php';
if(isset($_GET['no_resi'])){
    $no_resi=$_GET['no_resi'];

    $sql="delete from pengiriman where no_resi=$no_resi";
    $result=mysqli_query($db,$sql);
    if($result){
        header('location:pengiriman.php?pesan=sukses_hapus');
    }else {
        die(mysqli_connect_error($db));
    }
}
?>