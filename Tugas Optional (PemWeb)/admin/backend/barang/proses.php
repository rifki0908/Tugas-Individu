<?php

    include("../koneksi.php");

	@$proc = @$_REQUEST['proc'];
	
	@$id_barang = base64_decode(@$_POST['id_barang']);
	@$id_jenis = (@$_POST['id_jenis']);
	@$nama = @$_POST['nama'];
	@$deskripsi = @$_POST['deskripsi'];
	@$harga = @$_POST['harga'];
	@$awal = @$_FILES['gambar']['tmp_name'];
    @$tujuan = @$_FILES['gambar']['name'];
    
    move_uploaded_file(@$awal, "../images/barang/".@$tujuan);

    switch(@$proc){

        case "add" :


            $sql=$db->prepare("INSERT INTO tb_barang(id_jenis, nama, deskripsi, harga, gambar) VALUES(:id_jenis, :nama, :deskripsi, :harga, :gambar)");
            $sql->bindParam(':id_jenis', @$id_jenis);
            $sql->bindParam(':nama', @$nama);
            $sql->bindParam(':deskripsi', @$deskripsi);
            $sql->bindParam(':harga', @$harga);
            $sql->bindParam(':gambar', @$tujuan);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin membuat');
                    window.location.href='index.php?module=barang';
                </script>
            ";
        break;

        case "edit" :

            $sql=$db->prepare("UPDATE tb_barang SET id_jenis = :id_jenis, nama = :nama, deskripsi = :deskripsi, harga = :harga, gambar = :gambar WHERE id_barang = :id_barang");
            $sql->bindParam(':id_barang', @$id_barang);
            $sql->bindParam(':id_jenis', @$id_jenis);
            $sql->bindParam(':nama', @$nama);
            $sql->bindParam(':deskripsi', @$deskripsi);
            $sql->bindParam(':harga', @$harga);
            $sql->bindParam(':gambar', @$tujuan);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin merubah');
                    window.location.href='index.php?module=barang';
                </script>
            ";
        break;

        case "delete" :

            $id_barang = base64_decode(@$_GET['id']);

            $sql=$db->prepare("DELETE FROM tb_barang WHERE id_barang = :id_barang");
            $sql->bindParam(':id_barang', @$id_barang);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin menghapus');
                    window.location.href='index.php?module=barang';
                </script>
            ";
        break;
    }

?>