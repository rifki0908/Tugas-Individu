<div class="fix">
	<h1>Barang</h1>
	<div class="fix-input">
			<input type="submit" value="Create" onclick="javascript:window.location.href='index.php?module=barang&action=add'"></input>
	</div>
	<form action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="hidden" name="module" value="barang" />
		<input type="hidden" name="action" value="list" />
	</form>
    <div class="fix-table">
        <table class="table-design" border="1px" height="20%">
            <thead>
                <tr>
                    <th width="5%">No</th>
                    <th width="10%">Nama Type</th>
                    <th width="10%">Nama Barang</th>
                    <th width="10%">Deskripsi</th>
                    <th width="10%">Harga</th>
                    <th width="10%">Gambar</th>
                    <th width="12%">Option</th>
                </tr>
            </thead>
            <tbody>
			<?php 
				$no = 1;
				$sql=$db->prepare("SELECT A.id_barang, A.nama AS nama_barang, A.deskripsi, A.harga, A.gambar, B.nama AS nama_jenis FROM tb_barang AS A INNER JOIN tb_jenis AS B ON(A.id_jenis = B.id_jenis) WHERE A.id_barang");
				$sql->execute();
				while($hasil=$sql->FETCH(PDO::FETCH_ASSOC)){
			?>
			<tr>
				<td style="text-align: center;"><?php echo $no; ?></td>
				<td><?php echo $hasil['nama_jenis'];?></td>
				<td><?php echo $hasil['nama_barang'];?></td>
				<td><?php echo substr($hasil['deskripsi'],0,50);?></td>
				<td><?php echo $hasil['harga'];?></td>
				<td><img src="../images/barang/<?php echo $hasil['gambar'];?>"/></td>
				<td>
					<div class="option-button">
						<button onclick="javascript:window.location.href='index.php?module=barang&action=add&id=<?php echo base64_encode($hasil['id_barang']); ?>'">Edit</button>
						<button onclick="javascript:window.location.href='index.php?module=barang&action=proses&id=<?php echo base64_encode($hasil['id_barang']); ?>&proc=delete';">Delete</button>
					</div>
				</td>
			</tr>
			<?php
				$no++;
				}
			?>
            </tbody>
        </table>
    </div>
</div>