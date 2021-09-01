<?php $thisPage = "gallery"; ?>
<?php include('header.php'); ?>
<div style="margin-top:100px;">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
		<li class="breadcrumb-item breadcrumb-first"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Gallery</li>
	  </ol>
	</nav>
</div>
<div class="container mb-5">
	<h3 class="title_color">Image Gallery</h3>
	<div class="row gallery-item">
		
		<?php
		// $cursor1 = 4;
        // $cursor2 = 5;
        // List<String> listData = List.of("4", "4", "4", "6", "6", "4", "4", "4", "6", "6", "4", "4", "4", "6");
        // for (int i = 1; i <= listData.size(); i++) {
        //     if ((i % cursor1 == 0)) {
        //         System.out.println(listData.get(i-1) + " col-6");
        //         cursor1 += 5;
        //     } else if ((i % cursor2 == 0)) {
        //         System.out.println(listData.get(i-1) + " col-6");
        //         cursor2 += 5;
        //     } else {
        //         System.out.println(listData.get(i-1) + " col-4");
        //     }
        // }
		include 'conn.php';
		$batas = 10;
		$halaman = isset($_GET['halaman'])?(int)$_GET['halaman'] : 1;
		$halaman_awal = ($halaman>1) ? ($halaman * $batas) - $batas : 0;	
		$previous = $halaman - 1;
		$next = $halaman + 1;
		
		$data = mysqli_query($conn,"select * from foto");
		$jumlah_data = mysqli_num_rows($data);
		$total_halaman = ceil($jumlah_data / $batas);

		$data_produk = mysqli_query($conn,"select * from foto limit $halaman_awal, $batas");
		$nomor = $halaman_awal+1;
	
		while ($d = mysqli_fetch_array($data_produk)) {
		?>
			<div class="<?php if($d['kode']==1) { echo "col-4";} else {echo"col-6";} ?>">
				<a href="img/gallery/<?= $d['foto']; ?>.jpg" class="img-gal">
					<div class="single-gallery-image" style="background: url(img/gallery/<?= $d['foto']; ?>.jpg);"></div>
				</a>
			</div>
		<?php } ?>
	</div>

</div>
		<nav class="py-5">
			<ul class="pagination justify-content-center">
				<li class="page-item">
					<a class="page-link" <?php if($halaman > 1){ echo "href='gallery.php".$langParamBuilder."&halaman=".$previous."'"; } ?>>Previous</a>
				</li>
				<?php 
				for($x=1;$x<=$total_halaman;$x++){
					?> 
					<li class="page-item <?php if($halaman == $x){echo 'active';} ?>"><a class="page-link" href="gallery.php<?= $langParamBuilder ?>&halaman=<?php echo $x ?>"><?php echo $x; ?></a></li>
					<?php
				}
				?>				
				<li class="page-item">
					<a  class="page-link" <?php if($halaman < $total_halaman) { echo "href='gallery.php$langParamBuilder&halaman=$next'"; } ?>> Next</a>
				</li>
			</ul>
		</nav>



<?php include('footer.php') ?>
