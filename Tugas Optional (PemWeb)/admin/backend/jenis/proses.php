<?php

    include("../koneksi.php");

	@$proc = @$_REQUEST['proc'];
	
	@$id_jenis = base64_decode(@$_POST['id_jenis']);
	@$nama = @$_POST['nama'];

    switch(@$proc){

        case "add" :


            $sql=$db->prepare("INSERT INTO tb_jenis(nama) VALUES(:nama)");
            $sql->bindParam(':nama', @$nama);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin membuat');
                    window.location.href='index.php?module=jenis';
                </script>
            ";
        break;

        case "edit" :

            $sql=$db->prepare("UPDATE tb_jenis SET nama = :nama WHERE id_jenis = :id_jenis");
            $sql->bindParam(':id_jenis', @$id_jenis);
            $sql->bindParam(':nama', @$nama);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin merubah');
                    window.location.href='index.php?module=jenis';
                </script>
            ";
        break;

        case "delete" :

            $id_jenis = base64_decode(@$_GET['id']);

            $sql=$db->prepare("DELETE FROM tb_jenis WHERE id_jenis = :id_jenis");
            $sql->bindParam(':id_jenis', @$id_jenis);
            $sql->execute();

            echo"
                <script>
                    alert('Apakah anda ingin menghapus');
                    window.location.href='index.php?module=jenis';
                </script>
            ";
        break;
    }

?>