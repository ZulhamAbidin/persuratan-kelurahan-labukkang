<!doctype html>
<!-- <html lang="en"> -->
<HTML lang="en">

<head>
    <title>SIPS | Sistem Informasi Persuratan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#3063A0">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/vendor/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/vendor/toastr/toastr.min.css">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/vendor/iziToast/css/iziToast.min0c53.css">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/vendor/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/vendor/datatables/extensions/buttons/buttons.bootstrap4.min.css">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/stylesheets/custom.css">
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
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
        color: white !important;
		border: #2B5F9B !important;?
	}
</style>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/jquery/jquery.min.js"></script>

</head>

<BODY>
    <div class="app has-fullwidth">
        <style type="text/css">
            .active {
                border: 1px solid#ffffff4d;
                border-radius: 6px;
            }
        </style>

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
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('/')?>">Profil</a></li>
					<li class="nav-item"><a class="nav-link js-scroll-trigger" href="<?= base_url('tracking')?>">Struktur Organisasi</a>
					</li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('suratonline/halaman_pengajuan')?>">Pengajuan Surat</a></li>
					<li class="nav-item"><a class="nav-link" href="<?= base_url('tracking')?>">Track Surat</a></li>
					<li class="nav-item"><a class="nav-link" target="_blank"
							href="<?= base_url('auth/login')?>">Login</a></li>
				</ul>
			</div>
		</div>
	</nav>

            <br>    
        <main class="app-main mt-4">
            <div class="wrapper">
                <div class="page">
                    <div class="page-inner">
                        <div class="container-fluid bg-white rounded px-4">
                            <div class="container">
                                <div class="row mb-3 mt-4">
                                    <div class="col-lg-12">
                                        <br>
                                        <br>
                                        <div class="contact-wrapper form-style-two pt-115">
                                            <!-- <?php if ($this->session->flashdata('success') == TRUE) : ?>
                                                <?= $this->session->flashdata('success'); ?>
                                            <?php endif; ?> -->
                                            <div class="text-center mb-3">
                                                <h2 class="section-heading text-uppercase">Pengajuan Surat Online</h2>
                                                <h3 class="section-subheading text-muted">Isi Form Pengajuan Surat Dibawah:</h3>
                                            </div>
                                            <div class="text-justify ">
                                                <?= form_open_multipart('suratonline/ajukan', 'id="ajukanSurat"') ?>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <label for="nik">NIK *</label>
                                                        <?= form_input(['name' => 'nik', 'id' => 'nik', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan NIK anda']); ?>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <label for="nama">Nama *</label>
                                                        <?= form_input(['name' => 'nama', 'id' => 'nama', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan nama anda']); ?>
                                                    </div>
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="no_hp">No Hp *</label>
                                                        <?= form_input(['type' => 'text', 'name' => 'no_hp', 'id' => 'no_hp', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan No Hp anda']); ?>
                                                    </div>
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="tmpt_lahir">Tempat Lahir *</label>
                                                        <?= form_input(['name' => 'tmpt_lahir', 'id' => 'tmpt_lahir', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan tempat lahir anda']); ?>
                                                    </div>
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="tgl_lahir">Tanggal Lahir *</label>
                                                        <?= form_input(['type' => 'date', 'name' => 'tgl_lahir', 'id' => 'tgl_lahir', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan tanggal lahir anda']); ?>
                                                    </div>
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="agama">Agama *</label>
                                                        <?= form_input(['name' => 'agama', 'id' => 'agama', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan tempat lahir anda']); ?>
                                                    </div>
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="alamat">Alamat *</label>
                                                        <?= form_input(['type' => 'text', 'name' => 'alamat', 'id' => 'alamat', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan tanggal lahir anda']); ?>
                                                    </div>
                                                    <div class="col-lg-6 mt-2">
                                                        <label for="jenis">Pilih Jenis Surat *</label>
                                                        <?= form_dropdown('jenis_surat', $options, '', ['id' => 'jenis', 'class' => 'form-control']); ?>
                                                    </div>
                                                     <div class="col-lg-6 mt-2" id="cjekel" name="cjekel">
                                                        <label for="alamat">Jenis Kelamin *</label>
                                                        <?= form_input(['type' => 'text', 'name' => 'jekel', 'id' => 'jekel', 'class' => 'form-control', 'placeholder' => 'Silahkan masukkan jenis kelamin anda']); ?>
                                                    </div>
                                                     <div class="col-lg-6 mt-2" id="cstatus_kawin" name="cstatus_kawin">
                                                        <label for="alamat">Status Perkawinan *</label>
                                                        <?= form_input(['type' => 'text', 'name' => 'status_kawin', 'id' => 'status_kawin', 'class' => 'form-control','placeholder' => 'Silahkan masukkan status perkawinan']); ?>
                                                    </div>
                                                    <div class="col-lg-6 mt-2" id="cnama_usaha" name="cnama_usaha">
                                                        <label for="nama_usaha">Nama Usaha *</label>
                                                        <?= form_input(['name' => 'nama_usaha', 'id' => 'nama_usaha', 'class' => 'form-control', 'placeholder' => 'Silahkan masukkan Nama Usaha anda']); ?>
                                                    </div>
                                                    <div class="col-lg-6 mt-2" id="calamat_usaha" name="calamat_usaha">
                                                        <label for="alamat_usaha">Alamat Usaha *</label>
                                                        <?= form_input(['name' => 'alamat_usaha', 'id' => 'alamat_usaha', 'class' => 'form-control', 'placeholder' => 'Silahkan masukkan Alamat usaha anda']); ?>
                                                    </div>
                                                    <div class="col-lg-12 mt-2">
                                                        <label for="file">File Berkas/Lampiran <sup class="text-danger">*PDF Recommended! | Max 5MB</sup></label>
                                                        <?= form_upload(['name' => 'file', 'id' => 'file', 'class' => 'form-control']) ?>
                                                    </div>
                                                </div>
                                                <hr>
                                                <small>
                                                    <p class="text-danger">PENTING!! Syarat Harus Terpenuhi, Jika Tidak Pengajuan Tidak Diproses!</p>
                                                    <div id="syarat" class="text-danger">
                                                    </div>
                                                </small>
                                                <hr>
                                                <div class="row mt-2 mb-5">
                                                    <div class="col-lg-4">
                                                        <button type="submit" class="btn btn-block btn-primary">KIRIM PERMOHONAN</button>
                                                    </div>
                                                </div>
                                                <?= form_close() ?>
                                            </div>
                                        </div> <!-- contact wrapper form -->
                                    </div>
                                </div> <!-- row -->
                                <!-- <div class="container">
                                    <?php if ($this->session->flashdata('message') == TRUE) : ?>
                                        <?= $this->session->flashdata('message'); ?>
                                    <?php endif; ?>
                                    <div class="text-center">
                                        <h2 class="section-heading text-uppercase">Tracking Surat Online</h2>
                                        <h3 class="section-subheading text-muted">Masukkan ID Surat untuk <b>Track</b>:</h3>
                                    </div>
                                    <div class="text-justify pl-5 pr-5">
                                        <div class="row justify-content-center">
                                            <div class="col-12 col-md-10 col-lg-8">
                                                <?= form_open('tracking/cari', 'id="tracking", class="card card-sm"') ?>
                                                <div class="card-body row no-gutters align-items-center">
                                                    <div class="col-auto">
                                                        <i class="fas fa-search h4 text-body"></i>
                                                    </div>
                                                    <div class="col">
                                                        <input class="form-control form-control-lg form-control-borderless" type="search" name="trackid" placeholder="Masukkan ID Pengajuan Anda">
                                                    </div>
                                                    <div class="col-auto">
                                                        <button class="btn btn-lg btn-success" type="submit">Cari</button>
                                                    </div>
                                                </div>
                                                <?= form_close() ?>
                                            </div>
                                        </div>
                                    </div>
                                </div> -->
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
    </div>
</BODY>
<!-- </body> -->
<script>
    var cnama_usaha = document.getElementById("cnama_usaha");
    var calamat_usaha = document.getElementById("calamat_usaha");

    var cjekel = document.getElementById("cjekel");
    var cstatus_kawin = document.getElementById("cstatus_kawin");

    cnama_usaha.style.display = "none";
    calamat_usaha.style.display = "none";
    
    cjekel.style.display = "none";
    cstatus_kawin.style.display = "none";

    $('#jenis').change(function() {
        var e = document.getElementById("jenis");
        var jenisSurat = e.value;
        // console.log(jenisSurat)

        const spkk = ['KK Lama (Asli & FC)', 'KTP', 'Surat Pindah dari daerah asal', 'FC Buku Nikah', 'Surat Pengantar/Keterangan RT & RW']
        const spna = ['FC KK Calon Suami & Istri', 'FC KTP Calon Suami & Istri', 'Pas Foto 3x4 Calon Suami & Istri', 'Surat Pengantar/Keterangan RT & RW', 'FC Akta Cerai (Bagi Janda/Duda)']
        const skkm = ['KK (Asli & FC)', 'KTP', 'Surat Keterangan Kematian (Jika ada/Optional)', 'Surat Pengantar/Keterangan RT & RW']
        const skh = ['KK (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW', 'Data alamat daerah tujuan']
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
            cjekel.style.display = "none";
            cstatus_kawin.style.display = "none";
        } else if (jenisSurat == 'SPNA') {
            $('#syarat').html('')
            showList(spna)
            cnama_usaha.style.display = "none";
            calamat_usaha.style.display = "none";
            cjekel.style.display = "block";
            cstatus_kawin.style.display = "block";
        } else if (jenisSurat == 'SKKM') {
            $('#syarat').html('')
            showList(skkm)
            cnama_usaha.style.display = "none";
            calamat_usaha.style.display = "none";
            cjekel.style.display = "block";
            cstatus_kawin.style.display = "none";
        } else if (jenisSurat == 'SKH') {
            $('#syarat').html('')
            showList(skh)
            cnama_usaha.style.display = "none";
            calamat_usaha.style.display = "none";
            cjekel.style.display = "none";
            cstatus_kawin.style.display = "none";
        } else if (jenisSurat == 'SKD') {
            $('#syarat').html('')
            showList(skd)
            cnama_usaha.style.display = "none";
            calamat_usaha.style.display = "none";
            cjekel.style.display = "none";
            cstatus_kawin.style.display = "none";
        } else if (jenisSurat == 'SKBM') {
            $('#syarat').html('')
            showList(skbm)
            cnama_usaha.style.display = "none";
            calamat_usaha.style.display = "none";
            cjekel.style.display = "none";
            cstatus_kawin.style.display = "none";
        } else if (jenisSurat == 'SKPH') {
            $('#syarat').html('')
            showList(skph)
            cnama_usaha.style.display = "none";
            calamat_usaha.style.display = "none";
            cjekel.style.display = "none";
            cstatus_kawin.style.display = "none";
        } else if (jenisSurat == 'SKM') {
            $('#syarat').html('')
            showList(skm)
            cnama_usaha.style.display = "none";
            calamat_usaha.style.display = "none";
            cjekel.style.display = "none";
            cstatus_kawin.style.display = "none";
        } else if (jenisSurat == 'SKU') {
            $('#syarat').html('')
            showList(sku)
            cnama_usaha.style.display = "none";
            calamat_usaha.style.display = "none";
            cjekel.style.display = "none";
            cstatus_kawin.style.display = "none";
        } else if (jenisSurat == 'SKT') {
            $('#syarat').html('')
            showList(skt)
            cnama_usaha.style.display = "none";
            calamat_usaha.style.display = "none";
            cjekel.style.display = "none";
            cstatus_kawin.style.display = "none";
        } else if (jenisSurat == 'SKGG') {
            $('#syarat').html('')
            showList(skgg)
            cnama_usaha.style.display = "none";
            calamat_usaha.style.display = "none";
            cjekel.style.display = "none";
            cstatus_kawin.style.display = "none";
        } else if (jenisSurat == 'SITU') {
            $('#syarat').html('')
            showList(situ)
            cnama_usaha.style.display = "block";
            calamat_usaha.style.display = "block";
            cjekel.style.display = "none";
            cstatus_kawin.style.display = "none";
        } else if (jenisSurat == 'SIMB') {
            $('#syarat').html('')
            showList(simb)
            cnama_usaha.style.display = "none";
            calamat_usaha.style.display = "none";
            cjekel.style.display = "none";
            cstatus_kawin.style.display = "none";
        } else {
            console.log('Nothing')
            cnama_usaha.style.display = "none";
            calamat_usaha.style.display = "none";
            cjekel.style.display = "none";
            cstatus_kawin.style.display = "none";
        }
    })
</script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/bootstrap/js/popper.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/stacked-menu/stacked-menu.min.js"></script>

<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/datatables/jquery.dataTables.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/datatables/extensions/buttons/dataTables.buttons.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/datatables/extensions/buttons/buttons.bootstrap4.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/datatables/extensions/buttons/buttons.html5.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/datatables/extensions/buttons/buttons.print.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/toastr/toastr.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/iziToast/js/iziToast.min0ad4.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/flatpickr/flatpickr.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/perfect-scrollbar/perfect-scrollbar.min.js"></script>

<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/chart.js/Chart.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/javascript/theme.min.js"></script>

<script src="https://simpel.jtik.ft.unm.ac.id/assets/javascript/pages/dataTables.bootstrap.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/javascript/pages/toastr-demo.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/ckeditor/ckeditor.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/ckeditor/config.js"></script>

</HTML>