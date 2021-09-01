<?php 
	$thisPage = "packages"; 
 	include('header.php'); 
	$section1 = [
		"paket1" 	=>[
			"id"	=> "Paket Wisata Holy Land",
			"en"	=> "Holy Land Tour Packages"
		],
		"paket2" 	=>[
			"id"	=> "Paket Wisata Muslim",
			"en"	=> "Muslim Tour Packages"
		],
		"paket3" 	=>[
			"id"	=> "Paket Wisata Mancanegara",
			"en"	=> "International Tour Packages"
		],
		"paket4" 	=>[
			"id"	=> "Paket Wisata Domestik",
			"en"	=> "Domestic Tour Packages"
		]
	];
	$waktu = [
		"hari"	=>[
			"id"	=> "Hari",
			"en"	=> "Days"
		]
	];
	$tombol	= [
		"order"		=>[
			"id" 	=> "Pesan Sekarang",
			"en"	=> "Order Now"
		]
	];

	$template =[
        "id"    => "Halo%20admin.%0ATolong%20kirimkan%20info%20lengkapnya%20tentang%20paket%20",
        "en"    => "Hello%20admin.%0APlease%20more%20info%20about%20the%20package%20"
    ];
?>

<div style="margin-top:100px;">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
		<li class="breadcrumb-item breadcrumb-first"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Packages</li>
	  </ol>
	</nav>
</div>

<div class="container">
	<div class="row">
		<div class="col-12">
			<form class="form-inline">
				<input id="keyword" class="form-control mr-sm-2" style="width:100%" type="search" placeholder="Search" aria-label="Search">
			</form>
		</div>
	</div>
</div>

<div class="container pt-3" id="packages">
<br>
	<div class="row">
		<div class="col-lg-4">
		</div>
		<div class="col-lg-12">
			<h3><?= $section1["paket1"][$lang] ?></h3>
			<?php 
				include('conn.php');
				$holyland = mysqli_query($conn, 'SELECT * FROM paket WHERE tipe_paket="holyland"');
				while ($row = mysqli_fetch_array($holyland)) { 
			?>
			<div class="card mb-3 shadow-hover">
				<div class="row no-gutters">
					<div class="col-md-5 kotak">
						<img src="img/destination/<?= $row['img1'] ?>" style="width:100%; border-radius:10px" class="img-paket" alt="...">
						<span class="onsale">#Rank1</span>
					</div>
					<div class="col-md-7">
						<div class="card-body">
								<h5 class="card-title"><i class="fa fa-check-circle text-info"></i> <?= $row['nama_paket'] ?></h5>
								<p class="card-text"><?= substr($row['detail_'.$lang],0,300) ?>[...]</li></ul></strong>
								</p>
								<div class="mb-3 mt-0">
									<span><i class="fa fa-map-marker"> <?= $row['kota'] ?></i></span>
									<span class="ml-3"><i class="fa fa-clock-o"> <?= $row['waktu'].' '.$waktu['hari'][$lang] ?></i></span>
									<span class="ml-3" style="color:gold">
									<?php 
										$stars = $row['stars'];
										for($i=0 ; $i < $stars; $i++){
											echo '<i class="fa fa-star"></i>';
											$star_zero = 5-$stars;
										}
										if($star_zero > 0){
											for($j=0; $j < $star_zero; $j++ ){
												echo '<i class="fa fa-star-o"></i>';
											}
										}
									?>
									</span>
								</div>
								<a href="https:wa.me/<?= $no_wa ?>?text=<?= $template[$lang] .$row['nama_paket'] ?>" target="_BLANK" class="btn btn-success"><i class="fa fa-whatsapp"></i> <?= $tombol["order"][$lang] ?></a>
								<a href="package-detail.php<?= $langParamBuilder ?>&id=<?= $row['id'] ?>" class="btn btn-info"><i class="fa fa-eye"></i> Detail</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>

		<div class="col-lg-12 mt-4">
			<h3><?= $section1["paket2"][$lang] ?></h3>
			<?php 
				$muslim = mysqli_query($conn, 'SELECT * FROM paket WHERE tipe_paket="muslim"');
				while ($row = mysqli_fetch_array($muslim)) { 
			?>
			<div class="card mb-3 shadow-hover">
				<div class="row no-gutters">
					<div class="col-md-5">
						<img src="img/destination/<?= $row['img1'] ?>" class="img-paket" style="width:100%; border-radius:10px" alt="...">
					</div>
					<div class="col-md-7">
						<div class="card-body">
								<h5 class="card-title"><i class="fa fa-check-circle text-info"></i> <?= $row['nama_paket'] ?></h5>
								<p class="card-text"><?= substr($row['detail_'.$lang],0,300) ?>[...]</li></ul></strong>
								</p>
								<div class="mb-1" style="margin-top:-10px">
									<span><i class="fa fa-map-marker"> <?= $row['kota'] ?></i></span>
									<span class="ml-3"><i class="fa fa-clock-o"> <?= $row['waktu'].' '.$waktu['hari'][$lang] ?></i></span>
									<span class="ml-3" style="color:gold">
									<?php 
										$stars = $row['stars'];
										for($i=0 ; $i < $stars; $i++){
											echo '<i class="fa fa-star"></i>';
											$star_zero = 5-$stars;
										}
										if($star_zero > 0){
											for($j=0; $j < $star_zero; $j++ ){
												echo '<i class="fa fa-star-o"></i>';
											}
										}
									?>
									</span>
								</div>
								<a href="https:wa.me/<?= $no_wa ?>?text=<?= $template[$lang] .$row['nama_paket'] ?>" target="_BLANK" class="btn btn-success"><i class="fa fa-whatsapp"></i> <?= $tombol["order"][$lang] ?></a>
								<a href="package-detail.php<?= $langParamBuilder ?>&id=<?= $row['id'] ?>" class="btn btn-info"><i class="fa fa-eye"></i> Detail</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>

		<div class="col-lg-12 mt-4">
			<h3><?= $section1["paket3"][$lang] ?></h3>
			<?php 
				$manca = mysqli_query($conn, 'SELECT * FROM paket WHERE tipe_paket="mancanegara"');
				while ($row = mysqli_fetch_array($manca)) { 
			?>
			<div class="card mb-3 shadow-hover">
				<div class="row no-gutters">
					<div class="col-md-5">
						<img src="img/destination/<?= $row['img1'] ?>" class="img-paket" style="width:100%; border-radius:10px" alt="...">
					</div>
					<div class="col-md-7">
						<div class="card-body">
								<h5 class="card-title"><i class="fa fa-check-circle text-info"></i> <?= $row['nama_paket'] ?></h5>
								<div class="card-text"><?= substr($row['detail_'.$lang],0,300) ?> [...]</li></ul></strong> 
								</div>
								<div class="mb-3 mt-0">
									<span><i class="fa fa-map-marker"> <?= $row['kota'] ?></i></span>
									<span class="ml-3"><i class="fa fa-clock-o"> <?= $row['waktu'].' '.$waktu['hari'][$lang] ?></i></span>
									<span class="ml-3" style="color:gold">
									<?php 
										$stars = $row['stars'];
										for($i=0 ; $i < $stars; $i++){
											echo '<i class="fa fa-star"></i>';
											$star_zero = 5-$stars;
										}
										if($star_zero > 0){
											for($j=0; $j < $star_zero; $j++ ){
												echo '<i class="fa fa-star-o"></i>';
											}
										}
									?>
									</span>
								</div>
								<a href="https:wa.me/<?= $no_wa ?>?text=<?= $template[$lang] .$row['nama_paket'] ?>" target="_BLANK" class="btn btn-success"><i class="fa fa-whatsapp"></i> <?= $tombol["order"][$lang] ?></a>
								<a href="package-detail.php<?= $langParamBuilder ?>&id=<?= $row['id'] ?>" class="btn btn-info"><i class="fa fa-eye"></i> Detail</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>

		<div class="col-lg-12 mt-4">
			<h3><?= $section1["paket4"][$lang] ?></h3>
			<?php 
				$domestik = mysqli_query($conn, 'SELECT * FROM paket WHERE tipe_paket="domestik"');
				while ($row = mysqli_fetch_array($domestik)) { 
			?>
			<div class="card mb-3 shadow-hover">
				<div class="row no-gutters">
					<div class="col-md-5">
						<img src="img/destination/<?= $row['img1'] ?>" class="img-paket" style="width:100%; border-radius:10px" alt="...">
					</div>
					<div class="col-md-7">
						<div class="card-body">
								<h5 class="card-title"><i class="fa fa-check-circle text-info"></i> <?= $row['nama_paket'] ?></h5>
								<p class="card-text"><?= substr($row['detail_'.$lang],0,300) ?>[...]</li></ul></strong>
								</p>
								<div class="mb-3 mt-0">
									<span><i class="fa fa-map-marker"> <?= $row['kota'] ?></i></span>
									<span class="ml-3"><i class="fa fa-clock-o"> <?= $row['waktu'].' '.$waktu['hari'][$lang] ?></i></span>
									<span class="ml-3" style="color:gold">
									<?php 
										$stars = $row['stars'];
										for($i=0 ; $i < $stars; $i++){
											echo '<i class="fa fa-star"></i>';
											$star_zero = 5-$stars;
										}
										if($star_zero > 0){
											for($j=0; $j < $star_zero; $j++ ){
												echo '<i class="fa fa-star-o"></i>';
											}
										}
									?>
									</span>
								</div>
								<a href="https:wa.me/<?= $no_wa ?>?text=<?= $template[$lang] .$row['nama_paket'] ?>" target="_BLANK" class="btn btn-success"><i class="fa fa-whatsapp"></i> <?= $tombol["order"][$lang] ?></a>
								<a href="package-detail.php<?= $langParamBuilder ?>&id=<?= $row['id'] ?>" class="btn btn-info"><i class="fa fa-eye"></i> Detail</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>

	</div>
</div>
<script>
	var keyword = document.getElementById('keyword');
	var packages = document.getElementById('packages');
	keyword.addEventListener('keyup', function(){
		var xhr = new XMLHttpRequest();
		xhr.onreadystatechange = function(){
			if(xhr.readyState == 4 && xhr.status == 200){
				packages.innerHTML = xhr.responseText; 
			}
		}
//alert("<?= $langParamBuilder ?>");
		xhr.open('GET', 'db-packages.php<?= $langParamBuilder ?>&keyword=' + keyword.value, true);
		xhr.send();

	});

</script>
<br><br><br>
	<?php include('footer.php'); ?>

