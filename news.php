<?php 
    $thisPage = "news";
    include('header.php');
    $judul = [
        "id"    => "Berita Terkini",
        "en"    => "News Update"
    ];

    $berita1 = [
        "judul" => [
            "id"    => "UPDATE TERBARU",
            "en"    => "NEW UPDATE"
        ],
        "p" =>[
            "id"    => "Meeting Perdana di tahun 2021 melalui Zoom antara HMT Tour & Travel dan Royal Vacation Tour Israel dan Bavaria Tour Jordania dengan disaksikan para Leader HMT Tour & Travel beserta Pendeta-Pendeta Pembimbing Rohani HMT. Ikut serta juga dalam Zoom Meeting ini Perwakilan dari Kementerian Pariwisata Israel yang menyatakan siap menerima kedatangan grup-grup HMT di Holy Land.",

            "en"    => "First Meeting in early 2021 via Zoom between HMT Tour & Travel and Royal Vacation Tour Israel and Bavaria Tour Jordan, witnessed by HMT Tour & Travel Leaders and HMT Spiritual Guiding Pastors.Also participating in this Zoom Meeting was a representative from the Israeli Ministry of Tourism who stated that he was ready to accept the arrival of HMT groups in Holy Land.
            "
        ]
    ];
    $berita2 = [
        "judul" => [
            "id"    => "CSR HMT",
            "en"    => "CORPORATE SOCIAL RESPONSIBILITY of HMT"
        ],
        "p" =>[
            "id"    => "HMT Tour & Travel juga ikut dalam program kepedulian kepada masyarakat, dengan cara ambil bagian dalam kegiatan bakti sosial pengobatan gratis, penyuluhan anti narkoba serta aksi sosial lainnya, bekerja sama dengan instansi lain, seperti TNI dan Polri.",

            "en"    => "HMT Tour & Travel also participates in community care programs, by taking part in free medical services and other social actions, in collaboration with other agencies, such as the TNI (Indonesian National Army) and Polri (Indonesian Police Force).
            "
        ]
    ];
    $berita3 = [
        "judul" => [
            "id"    => "REKOMENDASI",
            "en"    => "RECOMMENDATION"
        ],
        "p" =>[
            "id"    => 'Dalam menjalankan kegiatannya HMT Tour & Travel banyak mendapat rekomendasi dari berbagai lembaga gereja dan instansi, antara lain:
            <ol style="margin-top:-15px">
                <li>DIRJEN BIMAS KRISTEN KEMENTERIAN AGAMA RI</li>
                <li>PENGURUS PGI WILAYAH DKI JAKARTA</li>
                <li>MAJELIS DAERAH GPdl DKI JAKARTA</li>
                <li>PENGURUS PUSAT GEREJA ORTHODOX INDONESIA</li>
            </ol>',

            "en"    => 'In its activities, HMT Tour & Travel received many recommendations from various church institutions and agencies, including:
            <ol style="margin-top:-15px">
                <li>DIRJEN BIMAS KRISTEN KEMENTERIAN AGAMA RI</li>
                <li>PENGURUS PGI WILAYAH DKI JAKARTA</li>
                <li>MAJELIS DAERAH GPdl DKI JAKARTA</li>
                <li>PENGURUS PUSAT GEREJA ORTHODOX INDONESIA</li>
            </ol>'
        ]
    ];
?>

<div style="margin-top:100px;">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
		<li class="breadcrumb-item breadcrumb-first"><a href="index.php">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">News</li>
	  </ol>
	</nav>
</div>

<div class="container mb-5">
	<h1><?= $judul[$lang] ?></h1>
    <div class="card mb-4 news">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="img/zoom.png" style="height:100%; width:100%" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                        <h5 class="card-title"><?= $berita1["judul"][$lang] ?></h5>
                        <p class="card-text"><?= $berita1["p"][$lang] ?>
                        </p>
                        <p class="card-text"><small class="text-muted"><i class="fa fa-user"></i> Admin HMT Tour & Travel</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4 news">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="img/csr.png" style="height:100%; width:100%" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                        <h5 class="card-title"><?= $berita2["judul"][$lang] ?></h5>
                        <p class="card-text"><?= $berita2["p"][$lang] ?>
                        </p>
                        <p class="card-text"><small class="text-muted"><i class="fa fa-user"></i> Admin HMT Tour & Travel</small></p>
                </div>
            </div>
        </div>
    </div>

    <div class="card mb-4 news">
        <div class="row no-gutters">
            <div class="col-md-4">
                <img src="img/rekomendasi.png" style="height:100%; width:100%" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                        <h5 class="card-title"><?= $berita3["judul"][$lang] ?></h5>
                        <p class="card-text">
                            <?= $berita3["p"][$lang] ?>
                        </p>
                        <p class="card-text"><small class="text-muted"><i class="fa fa-user"></i> Admin HMT Tour & Travel</small></p>
                </div>
            </div>
        </div>
    </div>
	
		
</div>

<?php include('footer.php'); ?>

