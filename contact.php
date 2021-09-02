<?php 
    $thisPage = "contact"; 
    include ('header.php'); 
    $judul = [
        "id"    => "Kontak Kami",
        "en"    => "Contact Us"
    ];
    $kontak=[
        "sub2"  =>[
            "id"    => "Senin - Jum'at | 09.00 - 17.00 WIB",
            "en"    => "Monday - Friday | 09.00 - 17.00 WIB"
        ],
        "sub3"=>[
            "id"    => "Kirimkan pertanyaan anda",
            "en"    => "Send your inquiry"
        ],
    ];
    $cabang = [
        "id"    => "Kantor Cabang HMT Tour & Travel",
        "en"    => "HMT Tour & Travel Branch Office"
    ];
    $placeholder = [
        "nama"  =>[
            "id"    => "Masukkan nama anda",
            "en"    => "Enter your name"
        ],
        "email"  =>[
            "id"    => "Masukkan email anda",
            "en"    => "Enter your email"
        ],
        "subject"  =>[
            "id"    => "Masukkan subyek",
            "en"    => "Enter subject"
        ],
        "pesan"  =>[
            "id"    => "Pesan",
            "en"    => "Message"
        ]
    ];
    $tombol = [
        "id"    => "Kirim Pesan",
        "en"    => "Send Message"
    ];
    $alertSukses = [
        "strong"  =>[
            "id"    => "Selamat!",
            "en"    => "Congratulations!"
        ],
        "p"  =>[
            "id"    => "Pesan anda berhasil dikirim",
            "en"    => "Your message was sent successfully"
        ]
    ];
    $alertGagal = [
            "id"    => "Pesan anda gagal dikirim :(",
            "en"    => "Your message failed to send :("
    ];
?> 
<div style="margin-top:100px;">
	<nav aria-label="breadcrumb">
	  <ol class="breadcrumb">
		<li class="breadcrumb-item breadcrumb-first"><a href="#">Home</a></li>
		<li class="breadcrumb-item active" aria-current="page">Contact Us</li>
	  </ol>
	</nav>
</div>
    <!--================Contact Area =================-->
    <section class="contact_area pt-3">
        <div class="container">
            <h1><?= $judul[$lang] ?></h1>
            <iframe class="pb-4" width="100%" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3966.8448319259487!2d106.891642!3d-6.1515301!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f541ce19b945%3A0x3431c7aaadd1f1b6!2sMall%20Of%20Indonesia!5e0!3m2!1sid!2sid!4v1630576643293!5m2!1sid!2sid" width="800" height="600" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            <div class="row">
                <div class="col-lg-5">
                    <div class="contact_info">
                        <div class="info_item">
                            <i class="lnr lnr-home"></i>
                            <h6>Kelapa Gading, Jakarta Utara</h6>
                            <p>Ruko Kelapa Gading Square <br> Mall of Indonesia Blok B No. 50A <br> Jl. Boulevard Barat Raya, Kelapa Gading, Jakarta Utara 14240</p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-phone-handset"></i>
                            <h6>021-2245-9897, 021-2245-9342 <br>WA Hotline: 0813-8899-0505</h6>
                            <p><?= $kontak["sub2"][$lang] ?></p>
                        </div>
                        <div class="info_item">
                            <i class="lnr lnr-envelope"></i>
                            <h6><a href="#">info@hmttour.com</a></h6>
                            <p><?= $kontak["sub3"][$lang] ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-7">
                <?php   if (isset($_GET['status'])) {
      
                    if ($_GET['status']=='berhasil'){
                        echo'<div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>'.$alertSukses['strong'][$lang].'</strong> '.$alertSukses['p'][$lang].'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                    }else if ($_GET['status']=='gagal'){
                        echo'<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <strong>Oooppsss!</strong> '.$alertGagal[$lang].'
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>';
                    }    
                }?>
                    <form class="row contact_form" action="contact_process.php" method="post" id="contactForm"
                        novalidate="novalidate">
                        <div class="col-md-8">
                            <div class="form-group">
                                <input type="text" class="form-control" id="name" name="name" placeholder="<?= $placeholder["nama"][$lang] ?>">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" id="email" name="email" placeholder="<?= $placeholder["email"][$lang] ?>">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="<?= $placeholder["subject"][$lang] ?>">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" name="message" id="message" rows="1" placeholder="<?= $placeholder["pesan"][$lang] ?>"></textarea>
                            </div>
                         
                        </div>
                        <!-- <div class="col-md-6">
                           
                        </div> -->
                        <div class="col-md-4 text-right">
                        <button type="submit" value="submit" class="main_btn my-5">
                                <?= $tombol[$lang] ?>
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!--================Contact Area =================-->
    <div class="container mt-5">
        <div class="contact_info">
            <div class="info_item">
            <i class="lnr lnr-home"></i>
                <h6><?= $cabang[$lang] ?></h6>
                <p><div class="row list-cabang">
						<div class="col-lg-4 col-md-6 col-sm-6 col-6">
							<ul>
								<li>MEDAN</li>
								<li>NIAS</li>
								<li>BATAM</li>
								<li>PALEMBANG</li>
								<li>LUBUK LINGGAU</li>
								<li>TANGERANG</li>
								<li>BSD, TANGERANG SELATAN</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6">
							<ul>
								<li>BEKASI</li>
								<li>BOGOR</li>
								<li>KARAWANG</li>
								<li>PURWAKARTA</li>
								<li>BANDUNG</li>
								<li>TASIKMALAYA</li>
								<li>MALANG</li>
							</ul>
						</div>
						<div class="col-lg-4 col-md-6 col-sm-6 col-6">
							<ul>
								<li>PONTIANAK</li>
								<li>PALANGKARAYA</li>
								<li>MANADO</li>
								<li>TORAJA</li>
								<li>KUPANG</li>
								<li>MANOKWARI</li>
								<li>TIMIKA</li>
							</ul>
						</div>
					</div></p>
            </div>
        </div>
    </div>

<?php include('footer.php'); ?>