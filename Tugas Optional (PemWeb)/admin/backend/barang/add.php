<div class="content-main">
    <h1>Barang</h1>
    <form action="index.php?module=barang&action=proses" method="POST" enctype="multipart/form-data">
        <?php
            if(@$_GET['id'] !=''){
        ?>
            <input type="hidden" name="id_barang" value="<?php echo @$_GET['id']; ?>" />
            <input type="hidden" name="proc" value="edit" />
        <?php
            }else{
        ?>
            <input type="hidden" name="proc" value="add" />
        <?php
            }
        ?>
        <div class="form-main">
            <table width="70%">
                <?php
                    $id_barang = base64_decode(@$_GET['id']);
                    $sql=$db->prepare("SELECT * FROM tb_barang WHERE id_barang = :id_barang");
                    $sql->bindParam(':id_barang', $id_barang);
                    $sql->execute();
                    $hasil=$sql->FETCH(PDO::FETCH_ASSOC);
                ?>
                <tr>
                    <td width="20%">Nama Jenis</td>
                    <td width="5%">:</td>
                    <td>
                        <select name="id_jenis">
                            <?php
                                $jenis = $db->prepare("SELECT * FROM tb_jenis");
                                $jenis->execute();
                                while($result = $jenis->FETCH(PDO::FETCH_ASSOC)){
                            ?>
                            <option value="<?php echo $result['id_jenis']; ?>"><?php echo $result['nama'];?></option>
                            <?php
                                }
                            ?>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td width="20%">Nama Barang</td>
                    <td width="5%">:</td>
                    <td><input type="text" name="nama" placeholder="Ketikan Nama..." value="<?php echo @$hasil['nama']; ?>" /></td>
                </tr>
                <tr>
                    <td width="20%">Deskripsi</td>
                    <td width="5%">:</td>
                    <td><input type="text" name="deskripsi" placeholder="Ketikan Deskripsi..." value="<?php echo @$hasil['deskripsi']; ?>" /></td>
                </tr>
                <tr>
                    <td width="20%">Harga</td>
                    <td width="5%">:</td>
                    <td><input type="text" name="harga" placeholder="Ketikan Harga..." value="<?php echo @$hasil['harga']; ?>" /></td>
                </tr>
                <tr>
                    <td width="20%">Gambar</td>
                    <td width="5%">:</td>
                    <td><input type="file" name="gambar" /></td>
                </tr>
                <tr>
                    <td colspan="3">
                        <button type="submit" class="btn">Submit</button>
                        <button type="button" class="btn" onclick="javascript:window.location.href='index.php?module=barang'">Cancel</button>
                    </td>
                </tr>
            </table>
        </div>
    </form>
</div>