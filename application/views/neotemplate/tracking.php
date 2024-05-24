
        

        <script>
            var cnama_usaha = document.getElementById("cnama_usaha");
            var calamat_usaha = document.getElementById("calamat_usaha");

            cnama_usaha.style.display = "none";
            calamat_usaha.style.display = "none";

            $('#jenis').change(function() {
                var e = document.getElementById("jenis");
                var jenisSurat = e.value;
                // console.log(jenisSurat)

                const spkk = ['KK Lama (Asli & FC)', 'KTP', 'Surat Pindah dari daerah asal', 'FC Buku Nikah', 'Surat Pengantar/Keterangan RT & RW']
                const spna = ['FC KK Calon Suami & Istri', 'FC KTP Calon Suami & Istri', 'Pas Foto 3x4 Calon Suami & Istri', 'Surat Pengantar/Keterangan RT & RW', 'FC Akta Cerai (Bagi Janda/Duda)']
                const skkl = ['KK (Asli & FC)', 'KTP', 'Surat Keterangan Kelahiran dari Bidan/RS (Jika ada/ Optional)', 'Surat Pengantar/Keterangan RT & RW']
                const skkm = ['KK (Asli & FC)', 'KTP', 'Surat Keterangan Kematian (Jika ada/Optional)', 'Surat Pengantar/Keterangan RT & RW']
                const skk = ['KK (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW', 'Data alamat daerah tujuan']
                const skd = ['KK (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW', 'Data alamat daerah asal']
                const skbm = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
                const skph = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pernyataan dari yang bersangkutan(Optional)', 'Surat Pengantar/Keterangan RT & RW']
                const skm = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
                const sku = ['KK (Asli & FC)', 'KTP (Asli & FC)', 'Izin Usaha', 'Surat Pengantar/Keterangan RT & RW']
                const skt = ['KTP (Asli & FC)', 'Surat Dasar Kepemilikan']
                const skgg = ['KTP (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
                const situ = ['KTP (Asli & FC)', 'KTP (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW']
                const simb = ['KTP (Asli & FC)', 'FC Surat Tanah Lokasi Bangunan', 'Surat Pengantar/Keterangan RT & RW']

                const showList = (surat) => {
                    surat.forEach(item => {
                        $('#syarat').append(
                            `
                                    <ul>
                                        <li>${item}</li>
                                    </ul>
                                    `
                        )
                    });
                }

                if (jenisSurat == 'SPKK') {
                    $('#syarat').html('')
                    showList(spkk)
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";
                } else if (jenisSurat == 'SPNA') {
                    $('#syarat').html('')
                    showList(spna)
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";
                } else if (jenisSurat == 'SKKL') {
                    $('#syarat').html('')
                    showList(skkl)
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";
                } else if (jenisSurat == 'SKKM') {
                    $('#syarat').html('')
                    showList(skkm)
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";
                } else if (jenisSurat == 'SKK') {
                    $('#syarat').html('')
                    showList(skk)
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";
                } else if (jenisSurat == 'SKD') {
                    $('#syarat').html('')
                    showList(skd)
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";
                } else if (jenisSurat == 'SKBM') {
                    $('#syarat').html('')
                    showList(skbm)
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";
                } else if (jenisSurat == 'SKPH') {
                    $('#syarat').html('')
                    showList(skph)
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";
                } else if (jenisSurat == 'SKM') {
                    $('#syarat').html('')
                    showList(skm)
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";
                } else if (jenisSurat == 'SKU') {
                    $('#syarat').html('')
                    showList(sku)
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";

                } else if (jenisSurat == 'SKT') {
                    $('#syarat').html('')
                    showList(skt)
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";
                } else if (jenisSurat == 'SKGG') {
                    $('#syarat').html('')
                    showList(skgg)
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";
                } else if (jenisSurat == 'SITU') {
                    $('#syarat').html('')
                    showList(situ)
                    cnama_usaha.style.display = "block";
                    calamat_usaha.style.display = "block";
                } else if (jenisSurat == 'SIMB') {
                    $('#syarat').html('')
                    showList(simb)
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";
                } else {
                    console.log('Nothing')
                    cnama_usaha.style.display = "none";
                    calamat_usaha.style.display = "none";
                }
            })
        </script>

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



    <main class="app-main">
            <div class="wrapper">
                <div class="page">
                    <div class="page-inner">
                        <div class="container-fluid bg-white rounded px-4">
                            <section id="surat" class="surat-area mt-50">
                                <div class="container">
                                    <div class="text-center">
                                        <h2 class="section-heading text-uppercase">Tracking Surat Online</h2>
                                        <h3 class="section-subheading text-muted">Surat <b>Ditemukan</b>, Detail Dibawah:</h3>
                                    </div>
                                    <div class="text-justify pl-5 pr-5">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-md-10 col-lg-10">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h3>Keterangan:</h3>
                                                        <table class="table">
                                                            <tr>
                                                                <td>ID Pengajuan</td>
                                                                <td>:</td>
                                                                <td><?= $row['id'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Nama Pengaju</td>
                                                                <td>:</td>
                                                                <td><?= $row['nama'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>NIK</td>
                                                                <td>:</td>
                                                                <td><?= $row['NIK'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>No Hp</td>
                                                                <td>:</td>
                                                                <td><?= $row['no_hp'] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>Jenis Surat</td>
                                                                <td>:</td>
                                                                <td><?= $options[$row['jenis_surat']] ?></td>
                                                            </tr>
                                                            <tr>
                                                                <td>File Lampiran</td>
                                                                <td>:</td>
                                                                <td>
                                                                    <button class="btn btn-primary" data-toggle="modal" data-target="#lihatFile<?= $row['id']; ?>"><i class="fa fa-eye"></i></button>
                                                                </td>
                                                            </tr>
                                                            <?php if ($row['status'] == '5') : ?>
                                                                <tr>
                                                                    <td>File Surat</td>
                                                                    <td>:</td>
                                                                    <td>
                                                                        <!-- <button class="btn btn-primary" data-toggle="modal" data-target="#lihatFile<?= $row['id']; ?>">Unduh</button> -->
                                                                        <?php if ($row['ttd'] == '1') : ?>
                                                                        <a href="<?= base_url() ?>/cetak/mypdf/<?= $row['id']; ?>"> <button class="btn btn-primary"><i class="fa fa-eye"></i></button></a>
                                                                        <br>
                                                                        <?php elseif ($row['ttd'] == '0') : ?>
                                                                        <a href="<?= base_url() ?>/cetak/mypdfdua/<?= $row['id']; ?>"> <button class="btn btn-primary"><i class="fa fa-eye"></i></button></a>
                                                                           <?php endif; ?>

                                                                    </td>
                                                                </tr>
                                                            <?php elseif ($row['status'] == '1') :  ?>
                                                                <tr>
                                                                    <td>Status Surat</td>
                                                                    <td>:</td>
                                                                    <td>
                                                                        Proses
                                                                    </td>
                                                                </tr>
                                                            <?php endif; ?>
                                                        </table>
                                                    </div>
                                                </div>
                                                <!-- <div>
                        <div class="checkout-wrap">
                            <ul class="checkout-bar">
                                <?php if ($row['status'] == '1') : ?>
                                    <li class="active first">Pengajuan Surat<br>Pending</li>
                                    <li class="">Dokumen<br>Diterima</li>
                                    <li class="">Verifikasi Berkas / Persyaratan<br>Dilanjutkan</li>
                                    <li class="">Sudah Diketik dan<br>Diparaf</li>
                                    <li class="">Sudah Ditandatangani<br>Lurah</li>
                                    <li class="">Selesai / Dapat Diambil<br>&nbsp;</li>

                                <?php elseif ($row['status'] == '5') : ?>
                                    <li class="active first">Pengajuan Surat<br>Pending</li>
                                    <li class="">-</li>
                                    <li class="">-</li>
                                    <li class="">-</li>
                                    <li class="">-</li>
                                    <li class="active">Selesai / Dapat Diambil<br>&nbsp;</li>
                                <?php endif; ?>
                            </ul>
                        </div>
                    </div> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </section>



                            <!-- Modal -->
                            <div class="modal fade" id="lihatFile<?= $row['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="fileLampiran" aria-hidden="true">
                                <div class="modal-dialog modal-lg" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="fileLampiran">File ID: <?= $row['id'] ?></h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <embed type="application/pdf" width="100%" height="450px;" src="<?= base_url('uploads/berkas') ?>/<?= $row['file'] ?>"></embed>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    if ('' != '' || '' != '' || '' != '') {
                        $('.memo').show();
                    } else {
                        $('.memo').hide();
                    }
                    var oto = 3;

                    if (oto == 3) {
                        $('.grap').hide();
                        $('.mhs').show();
                    } else {
                        $('.mhs').remove();
                    }
                    $('.mhs').remove(); //Data masih JPTE
                    $(document).ready(function() {

                        var val = {
                            "label": ["January", "February", "March", "April", "May", "June", "July", "August", "September"],
                            "data": ["52", "48", "26", "8", "11", "23", "29", "44", "12"]
                        };
                        var data = {
                            labels: val.label,
                            datasets: [{
                                backgroundColor: Looper.getColors('brand').indigo,
                                borderColor: Looper.getColors('brand').indigo,
                                data: val.data.map(Number)
                            }]
                        };

                        var val2 = {
                            "label": ["2020", "2021", "2022", "2023"],
                            "data": ["188", "336", "461", "253"]
                        };
                        var data2 = {
                            labels: val2.label,
                            datasets: [{
                                backgroundColor: Looper.getColors('brand').indigo,
                                borderColor: Looper.getColors('brand').indigo,
                                data: val2.data.map(Number)
                            }]
                        };

                        var canvas = $('#pengajuan-tahunini')[0].getContext('2d');
                        var chart = new Chart(canvas, {
                            type: 'bar',
                            data: data,
                            options: {
                                responsive: true,
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: false
                                },
                                scales: {
                                    xAxes: [{
                                        gridLines: {
                                            display: true,
                                            drawBorder: false,
                                            drawOnChartArea: false
                                        },
                                        ticks: {
                                            maxRotation: 0,
                                            maxTicksLimit: 3
                                        }
                                    }],
                                    yAxes: [{
                                        gridLines: {
                                            display: true,
                                            drawBorder: false
                                        },
                                        ticks: {
                                            beginAtZero: true,
                                            stepSize: 5
                                        }
                                    }]
                                }
                            }
                        });


                        var canvas2 = $('#pengajuan-tahun')[0].getContext('2d');
                        var chart2 = new Chart(canvas2, {
                            type: 'bar',
                            data: data2,
                            options: {
                                responsive: true,
                                legend: {
                                    display: false
                                },
                                title: {
                                    display: false
                                },
                                scales: {
                                    xAxes: [{
                                        gridLines: {
                                            display: true,
                                            drawBorder: false,
                                            drawOnChartArea: false
                                        },
                                        ticks: {
                                            maxRotation: 0,
                                            maxTicksLimit: 3
                                        }
                                    }],
                                    yAxes: [{
                                        gridLines: {
                                            display: true,
                                            drawBorder: false
                                        },
                                        ticks: {
                                            beginAtZero: true,
                                            stepSize: 5
                                        }
                                    }]
                                }
                            }
                        });
                    });
                </script>
            </div>

        </main>


         
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