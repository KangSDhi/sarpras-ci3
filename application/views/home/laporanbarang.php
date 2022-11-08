<div id="main-content">
	<!-- BEGIN PAGE CONTAINER-->
	<div class="container-fluid">
		<!-- BEGIN PAGE HEADER-->
		<div class="row-fluid">
			<div class="span12">
				<!-- BEGIN THEME CUSTOMIZER-->

				<!-- END THEME CUSTOMIZER-->
				<!-- BEGIN PAGE TITLE & BREADCRUMB-->
				<h2 class="page-title">
					<center>DAFTAR INVENTARIS BARANG RUANG <?php echo $ruang->nama_ruang; ?> </center>
				</h2>

				<!-- END PAGE TITLE & BREADCRUMB-->
			</div>
		</div>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->



		<table class="table table-striped table-hover table-bordered" id="editable-sample" border="2">


			<thead>
				<tr>
				<tr>
					<th>
						<center>No</center>
					</th>
					<th>
						<center>RUANGAN</center>
					</th>
					<th>
						<center>NAMA BARANG</center>
					</th>
					<th>
						<center>KODE INVENTARIS</center>
					</th>
					<th>
						<center>BAHAN</center>
					</th>
					<th>
						<center>TAHUN PEMBELIAN</center>
					</th>
					<th>
						<center>JUMLAH</center>
					</th>
					<th>
						<center>SISA</center>
					</th>
					<th>
						<center>STATUS</center>
					</th>
				</tr>
			</thead>
			<tbody>
				<?php
				$no = 1;
				foreach ($data as $item) {

					$sisa = $item->jumlah - $item->rusak;

					echo "<tr>
                                                <td><center>$no</center></td>
                                                <td><center>$item->nama_ruang</center></td>
                                                <td><center>$item->nama_barang</center></td>
                                                <td><center>$item->kode_inventaris</center></td>
                                                <td><center>$item->bahan</center></td>
                                                <td><center>$item->tahun_pembelian</center></td>
                                                <td><center>$item->jumlah</center></td>
												<td><center>$sisa</center></td>
                                                <td><center>$item->status</center></td>
                                                
                                                
                                                </tr>";

					$no++;
				}
				?>

			</tbody>
		</table>
	</div>
</div>
</div>
<!-- END EXAMPLE TABLE widget-->
</div>
</div>


</div>
</form>
<!-- END FORM-->
</div>
</div>
<!-- END EXTRAS widget-->
</div>
</div>

<!-- END PAGE CONTAINER-->
</div>
<!-- END PAGE -->
</div>
<!-- END CONTAINER -->
</div>
