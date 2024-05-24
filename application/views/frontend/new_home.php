<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<meta name="description" content="" />
	<meta name="author" content="" />
	<title><?= $title?></title>
	<link rel="icon" type="image/x-icon" href="<?= base_url()?>assets/img/favicon.ico" />
	<script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
	<!-- Google fonts-->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" <link
		href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet"
		type="text/css" />
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />
	<link href="<?= base_url()?>assets/css/styles.css" rel="stylesheet" />
	<link rel="stylesheet" href="<?= base_url();?>assets/jquery-ui-1.12.1/jquery-ui.css">
	<style>
    .lorem {
        background-color: #2B5F9B !important;
        color: white !important;
		border: #2B5F9B !important;
	}

	.lorem-color {
        /* background-color: #2B5F9B !important; */
        color: white !important;
		border: #2B5F9B !important;?
	}
</style>
</head>

<body id="page-top">
	<!-- Navigation-->
	<nav class="navbar navbar-expand-lg navbar-light fixed-top lorem" id="mainNav">
		<div class="container">
			<a class="navbar-brand js-scroll-trigger" href="#page-top"><img src="<?= base_url()?>assets/img/logoo.png" alt="Kelurahan" /></a>

			<button class="navbar-toggler bg-primary navbar-toggler-right" type="button" data-toggle="collapse"
				data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false"
				aria-label="Toggle navigation">
				Menu
				<i class="fas fa-bars ml-1"></i>
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav text-uppercase ml-auto">
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#profil">Profil</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="#struktur">Struktur Organisasi</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('suratonline/halaman_pengajuan')?>">Pengajuan Surat</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('tracking')?>">Track Surat</a></li>
					<li class="nav-item"><a class="nav-link" target="_blank"
							href="<?= base_url('auth/login')?>">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>



 
 <!-- Masthead-->
 <header class="masthead">
 	<div class="container">
 		<div class="masthead-subheading">Selamat Datang!</div>
 		<div class="masthead-heading text-uppercase">Kelurahan Labukkang</div>
 		<a class="btn btn-success btn-xl lorem text-uppercase js-scroll-trigger" href="#profil">Lihat Profil</a>
 	</div>
 </header>

 <!-- profil-->
 <section class="page-section" id="profil">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Profil</h2>
 			<h3 class="section-subheading text-muted">Kelurahan Labukkang, Kecamatan Ujung, Kota Parepare</h3>
 		</div>
 		<div class="row text-justify pl-5 pr-5">
 			<p><?= $profil[0]['profile'] ?></p>
 		</div>
 	</div>
 </section>

 <!-- struktur -->
 <section class="page-section bg-light" id="struktur">
 	<div class="container">
 		<div class="text-center">
 			<h2 class="section-heading text-uppercase">Struktur Organisasi</h2>
 			<h3 class="section-subheading text-muted">Kelurahan Labukkang, Kecamatan Ujung, Kota Parepare</h3>
 		</div>
 		<div class="row">
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#skelurahan">
 						<div class="portfolio-hove">
 							<div class="portfolio-hover-content"></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_kelurahan'] ?>"
 							alt="struktur-kelurahan" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Sruktur Kelurahan Labukkang</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#slpm">
 						<div class="portfolio-hove">
 							<div class="portfolio-hover-content"></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_lpm'] ?>"
 							alt="struktur-LPM" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Sruktur LPM</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#slinmas">
 						<div class="portfolio-hove">
 							<div class="portfolio-hover-content"></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_linmas'] ?>"
 							alt="struktur-linmas" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Sruktur LINMAS</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#spemuda">
 						<div class="portfolio-hove">
 							<div class="portfolio-hover-content"></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_pemuda'] ?>"
 							alt="struktur-pemuda" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">Sruktur Pemuda Kelurahan</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
 			</div>
 			<div class="col-lg-4 col-sm-6 mb-4">
 				<div class="portfolio-item">
 					<a class="portfolio-link" data-toggle="modal" href="#rtrw">
 						<div class="portfolio-hove">
 							<div class="portfolio-hover-content"></div>
 						</div>
 						<img class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['k_rtrw'] ?>"
 							alt="struktur-rtrw" />
 					</a>
 					<div class="portfolio-caption">
 						<div class="portfolio-caption-heading">RT & RW</div>
 						<div class="portfolio-caption-subheading text-muted">Klik + lihat detail</div>
 					</div>
 				</div>
			 </div>

	<div class="container">
 		<div class="text-center">
			 <h2 class="section-heading text-uppercase">Info Pengajuan Surat Online</h2>
			 <h3 class="section-subheading text-muted">Kelurahan Labukkang, Kecamatan Ujung, Kota Parepare</h3>
		</div>
		<div class="row text-justify pl-5 pr-5">
 			<p>Diberitahukan untuk melakukan Pengajuan Surat Online dimohon untuk melengkapi data dengan benar dan 
				 berkas persyaratan untuk Pengajuan Surat Online di Upload. Jika terdapat permasalahan dalam mengisi 
				 form Pengajuan Surat Online dimohon kepada pengaju untuk datang langsung ke Kantor Kelurahan Labukkang, 
				 atas perhatiannya terimakasih.</p>
 		</div>
	</div>
		 
 		</div>
 	</div>
 </section>


         
        <!-- Footer-->
        <footer class="footer py-4 lorem">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-4 text-lg-left" style="color:white">Copyright © Kelurahan Labukkang <?= date('Y')?>
					</div>
                    <div class="col-lg-4 my-3 my-lg-0">
                        <a class="btn lorem btn-social mx-2" href="#!"><i class="fab fa-youtube"></i></a>
                        <a class="btn lorem btn-social mx-2" href="#!"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn lorem btn-social mx-2" href="#!"><i class="fab fa-instagram"></i></a>
                    </div>
                    <div class="col-lg-4 text-lg-right ">
                        <a class="mr-3 lorem" href="#!">Contact</a>
                        <a href="#!" class="lorem">Other</a>
                    </div>
                </div>
            </div>
        </footer>

        <!-- Struktur -->
        
        <!-- Struktur Kelurahan -->
        <div class="portfolio-modal modal fade" id="skelurahan" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="<?= base_url()?>assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Struktur Kelurahan</h2>
                                    <p class="item-intro text-muted">|</p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_kelurahan']?>" alt="struktur-kelurahan" />
                                    <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul> -->
                                    <button class="btn lorem" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Struktur lpm -->
        <div class="portfolio-modal modal fade" id="slpm" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="<?= base_url()?>assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Struktur LPM</h2>
                                    <p class="item-intro text-muted">|</p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_lpm']?>" alt="struktur-lpm" />
                                    <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul> -->
                                    <button class="btn lorem" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Struktur linmas -->
        <div class="portfolio-modal modal fade" id="slinmas" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="<?= base_url()?>assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Struktur LINMAS</h2>
                                    <p class="item-intro text-muted">|</p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_linmas']?>" alt="struktur-linmas" />
                                    <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul> -->
                                    <button class="btn lorem" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Struktur pemuda -->
        <div class="portfolio-modal modal fade" id="spemuda" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="<?= base_url()?>assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Struktur Pemuda Kelurahan</h2>
                                    <p class="item-intro text-muted">|</p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_pemuda']?>" alt="struktur-pemuda" />
                                    <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul> -->
                                    <button class="btn lorem" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Struktur rtrw -->
        <div class="portfolio-modal modal fade" id="rtrw" tabindex="-1" role="dialog" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="close-modal" data-dismiss="modal"><img src="<?= base_url()?>assets/img/close-icon.svg" alt="Close modal" /></div>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-12">
                                <div class="modal-body">
                                    <!-- Project Details Go Here-->
                                    <h2 class="text-uppercase">Struktur RT & RW</h2>
                                    <p class="item-intro text-muted">|</p>
                                    <img class="img-fluid d-block mx-auto" src="<?= base_url('/assets/galery/'); echo $profil[0]['k_rtrw']?>" alt="struktur-rtrw" />
                                    <!-- <p>Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!</p>
                                    <ul class="list-inline">
                                        <li>Date: January 2020</li>
                                        <li>Client: Threads</li>
                                        <li>Category: Illustration</li>
                                    </ul> -->
                                    <button class="btn lorem" data-dismiss="modal" type="button">
                                        <i class="fas fa-times mr-1"></i>
                                        Tutup
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
        <!-- Contact form JS-->
        <script src="<?= base_url()?>assets/mail/jqBootstrapValidation.js"></script>
        <script src="<?= base_url()?>assets/mail/contact_me.js"></script>
        <!-- Core theme JS-->
        <script src="<?= base_url()?>assets/js/scripts.js"></script>
        <script src="<?= base_url();?>assets/jquery-ui-1.12.1/jquery-ui.js"></script>
    </body>
</html>