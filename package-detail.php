<?php 
    $thisPage = "packages";
    include('header.php');
    $waktu = [
        "id"	=> "Hari",
        "en"	=> "Days"
	];
	$tombol	= [
		"order"		=>[
			"id" 	=> "Pesan Sekarang",
			"en"	=> "Order Now"
        ],
        "kembali"		=>[
			"id" 	=> "Kembali",
			"en"	=> "Back"
        ]
    ];
    $deskripsi = [
        "id"	=> "Deskripsi",
        "en"	=> "Description"
    ];

    $template =[
        "id"    => "Halo%20admin.%0ATolong%20kirimkan%20info%20lengkapnya%20tentang%20paket%20",
        "en"    => "Hello%20admin.%0APlease%20more%20info%20about%20the%20package%20"
    ];

    include 'conn.php';
    $id = $_GET['id'];
    $data = mysqli_query($conn, "select * from paket where id='$id'");
    while ($d = mysqli_fetch_array($data)) {
?>
<div style="margin-top:100px;">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
		<li class="breadcrumb-item breadcrumb-first"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item"><a href="packages.php">Packages</a></li>
		<li class="breadcrumb-item active" aria-current="page"><?= substr($d['nama_paket'],0,20) ?>..</li>
	  </ol>
	</nav>
</div>

    <section class="container mb-3">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <?php if($d['img3'] != null) { ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            <?php } ?>
            <?php if($d['img4'] != null) { ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
            <?php } ?>
            <?php if($d['img5'] != null) { ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
            <?php } ?>
            <?php if($d['img6'] != null) { ?>
                <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
            <?php } ?>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <a href="img/destination/<?= $d['img1'] ?>">
                    <img src="img/destination/<?= $d['img1'] ?>" class="d-block w-100" alt="...">
                </a>
            </div>
            <div class="carousel-item">
                <a href="img/destination/<?= $d['img2'] ?>">
                    <img src="img/destination/<?= $d['img2'] ?>" class="d-block w-100" alt="...">
                </a>
            </div>
            <?php if($d['img3'] != null) { ?>
                <div class="carousel-item">
                    <a href="img/destination/<?= $d['img3'] ?>">
                        <img src="img/destination/<?= $d['img3'] ?>" class="d-block w-100" alt="...">
                    </a>
                </div>
            <?php } ?>
            <?php if($d['img4'] != null) { ?>
                <div class="carousel-item">
                    <a href="img/destination/<?= $d['img4'] ?>">
                        <img src="img/destination/<?= $d['img4'] ?>" class="d-block w-100" alt="...">
                    </a>
                </div>
            <?php } ?>
            <?php if($d['img5'] != null) { ?>
                <div class="carousel-item">
                    <a href="img/destination/<?= $d['img5'] ?>">
                        <img src="img/destination/<?= $d['img5'] ?>" class="d-block w-100" alt="...">
                    </a>
                </div>
            <?php } ?>
            <?php if($d['img6'] != null) { ?>
                <div class="carousel-item">
                    <a href="img/destination/<?= $d['img6'] ?>">
                        <img src="img/destination/<?= $d['img6'] ?>" class="d-block w-100" alt="...">
                    </a>
                </div>
            <?php } ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    </section>

<div class="container mb-5">
<h3><?= $d['nama_paket'] ?> </h3>
    <div class="mb-3 mt-0">
        <span><i class="fa fa-map-marker"> <?= $d['kota'] ?></i></span>
        <span class="ml-3"><i class="fa fa-clock-o"> <?= $d['waktu'].' '.$waktu[$lang] ?></i></span>
        <span class="ml-3" style="color:gold">
        <?php 
            $stars = $d['stars'];
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
    <nav>
        <div class="nav nav-tabs" id="nav-tab" role="tablist">
            <a class="nav-link text-secondary active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true"><?= $deskripsi[$lang] ?></a>
            <a class="nav-link text-secondary" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Detail</a>
        </div>
    </nav>
    <div class="tab-content px-2 py-2" id="nav-tabContent">
        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <?= $d['deskripsi_'.$lang] ?>
        </div>
        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
           <div id="konten">
                <?= $d['detail_'.$lang] ?>
           </div> 
           <div id="editor"></div>
            
        
        </div>
    </div>
    <a href="javascript:history.go(-1)" class="btn btn-warning text-white"><i class="fa fa-arrow-left"></i> <?= $tombol["kembali"][$lang] ?></a>
    <a href="https://wa.me/<?= $no_wa ?>?text=<?= $template[$lang] .$d['nama_paket'] ?>" target="_BLANK" class="btn btn-success"><i class="fa fa-whatsapp"></i> <?= $tombol["order"][$lang] ?></a> 
    <a href="download.php?filename=<?= $d['download_'.$lang] ?>.pdf" id="konvert" class="btn btn-primary text-white" style="display:none"><i class="fa fa-download"></i> Download PDF</a>
</div>

<?php } ?>
<?php include('footer.php') ?>
