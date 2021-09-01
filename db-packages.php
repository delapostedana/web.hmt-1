<?php 

    include('conn.php');
    $keyword = $_GET['keyword'];
	$lang =	$_GET['lang'];
    $paket = mysqli_query($conn, "SELECT * FROM paket WHERE 
                            nama_paket LIKE '%$keyword%' OR
                            detail_$lang LIKE '%$keyword%' OR
                            kota LIKE '%$keyword%' OR
                            waktu LIKE '%$keyword%'
                            ");
    
    // var_dump($paket);
	$no_wa = '6281388990505';
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

<div class="container pt-3" id="packages">
<br>
	<div class="row">
		<div class="col-lg-4">
		</div>
		<div class="col-lg-12">
			<?php 
				while ($row = mysqli_fetch_array($paket)) { 
			?>
			<div class="card mb-3 shadow-hover">
				<div class="row no-gutters">
					<div class="col-md-5 kotak">
						<img src="img/destination/<?= $row['img1'] ?>" style="width:100%; border-radius:10px" class="img-paket" alt="...">
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
								<a href="package-detail.php?lang=<?= $lang ?>&id=<?= $row['id'] ?>" class="btn btn-info"><i class="fa fa-eye"></i> Detail</a>
						</div>
					</div>
				</div>
			</div>
			<?php } ?>
		</div>

	</div>
</div>