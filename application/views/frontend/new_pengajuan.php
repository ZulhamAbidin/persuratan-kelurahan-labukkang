<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">

    <!--====== Title ======-->
    <title>Smash - Bootstrap Business Template</title>

    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!--====== Favicon Icon ======-->
    <link rel="shortcut icon" href="<?= base_url() ?>assets/smash/images/favicon.png" type="image/png">

    <!--====== Magnific Popup CSS ======-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/smash/css/magnific-popup.css">

    <!--====== Slick CSS ======-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/smash/css/slick.css">

    <!--====== Line Icons CSS ======-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/smash/css/LineIcons.css">

    <!--====== Bootstrap CSS ======-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/smash/css/bootstrap.min.css">

    <!--====== Default CSS ======-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/smash/css/default.css">

    <!--====== Style CSS ======-->
    <link rel="stylesheet" href="<?= base_url() ?>assets/smash/css/style.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/balkans/OrgChart.js">
    <script src="https://balkan.app/js/OrgChart.js"></script>
    <script>
        var base_url = "<?php echo base_url(); ?>";
    </script>
</head>

<style>
    @media (min-width:576px) {
        .modal-dialog {
            max-width: 1000px;
            margin: 1.75rem auto;
        }
    }
</style>

<body>

    <!--[if IE]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->

    <!--====== PRELOADER PART START ======-->

    <div class="preloader">
        <div class="loader">
            <div class="ytp-spinner">
                <div class="ytp-spinner-container">
                    <div class="ytp-spinner-rotator">
                        <div class="ytp-spinner-left">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                        <div class="ytp-spinner-right">
                            <div class="ytp-spinner-circle"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--====== PRELOADER PART ENDS ======-->

    <!--====== NAVBAR TWO PART START ======-->

    <section class="navbar-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg">

                        <a class="navbar-brand" href="#">
                            <img src="<?= base_url() ?>assets/smash/images/logo.svg" alt="Logo">
                        </a>

                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTwo" aria-controls="navbarTwo" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                            <span class="toggler-icon"></span>
                        </button>

                        <div class="collapse navbar-collapse sub-menu-bar" id="navbarTwo">
                            <ul class="navbar-nav m-auto">
                                <li class="nav-item active"><a class="page-scroll" href="#/home">Beranda</a></li>
                                <li class="nav-item"><a class="page-scroll" href="/#services">Profil</a></li>
                                <li class="nav-item"><a class="page-scroll" href="/#pricing">Struktur</a></li>
                                <li class="nav-item"><a class="page-scroll" href="/#contact">Kontak</a></li>
                                <li class="nav-item"><a class="page-scroll" href="#surat">Surat</a></li>
                            </ul>
                        </div>

                        <div class="navbar-btn d-none d-sm-inline-block">
                            <ul>
                                <li><a class="solid" target="_blank" href="<?= base_url('auth/login') ?>">Login</a></li>
                            </ul>
                        </div>
                    </nav> <!-- navbar -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== NAVBAR TWO PART ENDS ======-->



    <section id="surat" class="surat-area">
        <div class="container">
            <div class="row mb-3">
                <div class="col-lg-12">
                    <div class="contact-wrapper form-style-two pt-115">
                        <?php if ($this->session->flashdata('success') == TRUE) : ?>
                            <?= $this->session->flashdata('success'); ?>
                        <?php endif; ?>
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
                                <div class="col-lg-6">
                                    <label for="tmpt_lahir">Tempat Lahir *</label>
                                    <?= form_input(['name' => 'tmpt_lahir', 'id' => 'tmpt_lahir', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan tempat lahir anda']); ?>
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <label for="tgl_lahir">Tanggal Lahir *</label>
                                    <?= form_input(['type' => 'date', 'name' => 'tgl_lahir', 'id' => 'tgl_lahir', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan tanggal lahir anda']); ?>
                                </div>
                                <div class="col-lg-6">
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
                                <div class="col-lg-6 mt-2">
                                    <label for="nama_usaha">Nama Usaha *</label>
                                    <?= form_input(['name' => 'nama_usaha', 'id' => 'nama_usaha', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan Nama Usaha anda']); ?>
                                </div>
                                <div class="col-lg-6 mt-2">
                                    <label for="alamat_usaha">Alamat Usaha *</label>
                                    <?= form_input(['name' => 'alamat_usaha', 'id' => 'alamat_usaha', 'class' => 'form-control', "required" => "required", 'placeholder' => 'Silahkan masukkan Alamat usaha anda']); ?>
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
                            <div class="row mt-2">
                                <div class="col-lg-4">
                                    <button type="submit" class="btn btn-block btn-primary">KIRIM PERMOHONAN</button>
                                </div>
                            </div>
                            <?= form_close() ?>
                        </div>
                    </div> <!-- contact wrapper form -->
                </div>
            </div> <!-- row -->
            <div class="container">
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
                                <!--end of col-->
                                <div class="col">
                                    <input class="form-control form-control-lg form-control-borderless" type="search" name="trackid" placeholder="Masukkan ID Pengajuan Anda">
                                </div>
                                <!--end of col-->
                                <div class="col-auto">
                                    <button class="btn btn-lg btn-success" type="submit">Cari</button>
                                </div>
                                <!--end of col-->
                            </div>
                            <?= form_close() ?>
                        </div>
                        <!--end of col-->
                    </div>
                </div>
            </div>
        </div> <!-- container -->
    </section>

    <section id="contact" class="contact-area">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 col-md-10">
                    <div class="section-title text-center pb-30">
                        <h3 class="title">Pengaduan</h3>
                        <p class="text">Pengaduan Online untuk membantu mengingkatkan pelayanan kepada masyarakat</p>
                    </div> <!-- section title -->
                </div>
            </div> <!-- row -->
            <div class="text-justify ">
                <?= form_open_multipart('pengaduan/ajukan', 'id="ajukanPengaduan"') ?>
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
                        <label for="jenis">Pilih Jenis Pengaduan *</label>
                        <?= form_dropdown('jenis_pengaduan', $optionsdua, '', ['id' => 'jenis', 'class' => 'form-control']); ?>
                    </div>
                    <div class="col-lg-12 mt-2">
                        <label for="file">File Berkas/Lampiran <sup class="text-danger">*PDF Recommended! | Max 5MB</sup></label>
                        <?= form_upload(['name' => 'file', 'id' => 'file', 'class' => 'form-control']) ?>
                    </div>
                </div>
                <hr>
                <!-- <small>
                    <p class="text-danger">PENTING!! Syarat Harus Terpenuhi, Jika Tidak Pengajuan Tidak Diproses!</p>
                    <div id="syarat" class="text-danger">
                    </div>
                </small> -->
                <!-- <hr> -->
                <div class="row mt-2">
                    <div class="col-lg-4">
                        <button type="submit" class="btn btn-block btn-primary">KIRIM PERMOHONAN</button>
                    </div>
                </div>
                <?= form_close() ?>
            </div>



        </div> <!-- container -->
    </section>
    <!--====== FOOTER PART START ======-->

    <section class="footer-area footer-dark">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="footer-logo text-center">
                        <a class="mt-30" href="index.html"><img src="<?= base_url() ?>assets/smash/images/logo.svg" alt="Logo"></a>
                    </div> <!-- footer logo -->
                    <ul class="social text-center mt-60">
                        <li><a href="https://facebook.com/uideckHQ"><i class="lni lni-facebook-filled"></i></a></li>
                        <li><a href="https://twitter.com/uideckHQ"><i class="lni lni-twitter-original"></i></a></li>
                        <li><a href="https://instagram.com/uideckHQ"><i class="lni lni-instagram-original"></i></a></li>
                        <li><a href="#"><i class="lni lni-linkedin-original"></i></a></li>
                    </ul> <!-- social -->
                    <div class="footer-support text-center">
                        <span class="number">+8801234567890</span>
                        <span class="mail">support@uideck.com</span>
                    </div>
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== FOOTER PART ENDS ======-->

    <!--====== BACK TOP TOP PART START ======-->

    <a href="#" class="back-to-top"><i class="lni lni-chevron-up"></i></a>

    <!--====== BACK TOP TOP PART ENDS ======-->

    <!--====== PART START ======-->

    <!--
    <section class="">
        <div class="container">
            <div class="row">
                <div class="col-lg-">
                    
                </div>
            </div>
        </div>
    </section>
-->

    <!--====== PART ENDS ======-->


    <div class="modal fade" id="modallpm" aria-labelledby="exampleModalLabel" width="1000px" aria-hidden="true">
        <div class="modal-dialog" style="max-width:1000px">
            <div class="modal-content">
                <form name="formstatus" id="formstatus" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Struktur LPM</h5>

                    </div>
                    <div class="modal-body mx-3">
                        <div style="width:100%; height:500px;" id="tree"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalpemdes" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form name="formstatus" id="formstatus" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Struktur PEMDES</h5>

                    </div>
                    <div class="modal-body mx-3">
                        <div style="width:100%; height:500px;" id="treepemdes"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modallinmas" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form name="formstatus" id="formstatus" method="post">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Struktur LIMNAS</h5>

                    </div>
                    <div class="modal-body mx-3">
                        <div style="width:100%; height:500px;" id="treelinmas"></div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    </div>
                </form>
            </div>
        </div>
    </div>



    <!--====== Jquery js ======-->
    <script src="<?= base_url() ?>assets/smash/js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?= base_url() ?>assets/smash/js/vendor/modernizr-3.7.1.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="<?= base_url() ?>assets/smash/js/popper.min.js"></script>
    <script src="<?= base_url() ?>assets/smash/js/bootstrap.min.js"></script>

    <!--====== Slick js ======-->
    <script src="<?= base_url() ?>assets/smash/js/slick.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="<?= base_url() ?>assets/smash/js/jquery.magnific-popup.min.js"></script>

    <!--====== Ajax Contact js ======-->
    <script src="<?= base_url() ?>assets/smash/js/ajax-contact.js"></script>

    <!--====== Isotope js ======-->
    <script src="<?= base_url() ?>assets/smash/js/imagesloaded.pkgd.min.js"></script>
    <script src="<?= base_url() ?>assets/smash/js/isotope.pkgd.min.js"></script>

    <!--====== Scrolling Nav js ======-->
    <script src="<?= base_url() ?>assets/smash/js/jquery.easing.min.js"></script>
    <script src="<?= base_url() ?>assets/smash/js/scrolling-nav.js"></script>

    <!--====== Main js ======-->
    <script src="<?= base_url() ?>assets/smash/js/main.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('#nik').autocomplete({
                source: "<?php echo site_url('Penduduk/get_autocomplete'); ?>",

                select: function(event, ui) {
                    console.log(ui.item)
                    $('[name="nik"]').val(ui.item.label);
                    $('[name="nama"]').val(ui.item.nama);
                    $('[name="no_hp"]').val(ui.item.no_hp);
                },
                response: function(event, ui) {
                    if (ui.content.length === 0) {
                        console.log('No results loaded!');
                    } else {
                        console.log('success!');
                    }
                },
            });

        });
    </script>

    <script>
        $('#jenis').change(function() {
            var e = document.getElementById("jenis");
            var jenisSurat = e.value;
            // console.log(jenisSurat)

            const spkk = ['KK Lama (Asli & FC)', 'KTP', 'Surat Pindah dari daerah asal', 'FC Buku Nikah', 'Surat Pengantar/Keterangan RT & RW']
            const spna = ['FC KK Calon Suami & Istri', 'FC KTP Calon Suami & Istri', 'Pas Foto 3x4 Calon Suami & Istri', 'Surat Pengantar/Keterangan RT & RW', 'FC Akta Cerai (Bagi Janda/Duda)']
            const skkl = ['KK (Asli & FC)', 'KTP', 'Surat Keterangan Kelahiran dari Bidan/RS (Jika ada/ Optional)', 'Surat Pengantar/Keterangan RT & RW']
            const skkm = ['KK (Asli & FC)', 'KTP', 'Surat Keterangan Kematian (Jika ada/Optional)', 'Surat Pengantar/Keterangan RT & RW']
            const skp = ['KK (Asli & FC)', 'Surat Pengantar/Keterangan RT & RW', 'Data alamat daerah tujuan']
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
            } else if (jenisSurat == 'SPNA') {
                $('#syarat').html('')
                showList(spna)
            } else if (jenisSurat == 'SKKL') {
                $('#syarat').html('')
                showList(skkl)
            } else if (jenisSurat == 'SKKM') {
                $('#syarat').html('')
                showList(skkm)
            } else if (jenisSurat == 'SKP') {
                $('#syarat').html('')
                showList(skp)
            } else if (jenisSurat == 'SKD') {
                $('#syarat').html('')
                showList(skd)
            } else if (jenisSurat == 'SKBM') {
                $('#syarat').html('')
                showList(skbm)
            } else if (jenisSurat == 'SKPH') {
                $('#syarat').html('')
                showList(skph)
            } else if (jenisSurat == 'SKM') {
                $('#syarat').html('')
                showList(skm)
            } else if (jenisSurat == 'SKU') {
                $('#syarat').html('')
                showList(sku)
            } else if (jenisSurat == 'SKT') {
                $('#syarat').html('')
                showList(skt)
            } else if (jenisSurat == 'SKGG') {
                $('#syarat').html('')
                showList(skgg)
            } else if (jenisSurat == 'SITU') {
                $('#syarat').html('')
                showList(situ)
            } else if (jenisSurat == 'SIMB') {
                $('#syarat').html('')
                showList(simb)
            } else {
                console.log('Nothing')
            }
        })
    </script>

</body>
<script>
    var chart = new OrgChart(document.getElementById("tree"), {
        // scaleInitial: 0.5,
        nodeBinding: {
            field_0: "Nama",
            field_1: "Jabatan"
        },
        toolbar: {
            zoom: false,
            fit: true,
            expandAll: false
        },
        nodes: [{
                id: 1,
                Nama: "Denny Curtis",
                Jabatan: "Ketua"
            },
            {
                id: 2,
                pid: 1,
                Nama: "Ashley Barnett",
                Jabatan: "Sekretaris"
            },
            {
                id: 3,
                pid: 1,
                Nama: "Caden Ellison",
                Jabatan: "Bendahara"
            },
            {
                id: 4,
                pid: 2,
                Nama: "Elliot Patel",
                Jabatan: "Anggota"
            },
            {
                id: 5,
                pid: 2,
                Nama: "Lynn Hussain",
                Jabatan: "Anggota"

            },
            {
                id: 6,
                pid: 3,
                Nama: "Tanner May",
                Jabatan: "Anggota"

            },
            {
                id: 7,
                pid: 3,
                Nama: "Fran Parsons",
                Jabatan: "Anggota"

            }
        ]
    });

    var chartdua = new OrgChart(document.getElementById("treepemdes"), {
        // scaleInitial: 0.5,
        nodeBinding: {
            field_0: "Nama",
            field_1: "Jabatan"
        },
        toolbar: {
            zoom: false,
            fit: true,
            expandAll: false
        },
        nodes: [{
                id: 1,
                Nama: "Denny Curtis",
                Jabatan: "Ketua"
            },
            {
                id: 2,
                pid: 1,
                Nama: "Ashley Barnett",
                Jabatan: "Sekretaris"
            },
            {
                id: 3,
                pid: 1,
                Nama: "Caden Ellison",
                Jabatan: "Bendahara"
            },
            {
                id: 4,
                pid: 2,
                Nama: "Elliot Patel",
                Jabatan: "Anggota"
            },
            {
                id: 5,
                pid: 2,
                Nama: "Lynn Hussain",
                Jabatan: "Anggota"

            },
            {
                id: 6,
                pid: 3,
                Nama: "Tanner May",
                Jabatan: "Anggota"

            },
            {
                id: 7,
                pid: 3,
                Nama: "Fran Parsons",
                Jabatan: "Anggota"

            }
        ]
    });

    var chartdua = new OrgChart(document.getElementById("treelinmas"), {
        // scaleInitial: 0.5,
        nodeBinding: {
            field_0: "Nama",
            field_1: "Jabatan"
        },
        toolbar: {
            zoom: false,
            fit: true,
            expandAll: false
        },
        nodes: [{
                id: 1,
                Nama: "Denny Curtis",
                Jabatan: "Ketua"
            },
            {
                id: 2,
                pid: 1,
                Nama: "Ashley Barnett",
                Jabatan: "Sekretaris"
            },
            {
                id: 3,
                pid: 1,
                Nama: "Caden Ellison",
                Jabatan: "Bendahara"
            },
            {
                id: 4,
                pid: 2,
                Nama: "Elliot Patel",
                Jabatan: "Anggota"
            },
            {
                id: 5,
                pid: 2,
                Nama: "Lynn Hussain",
                Jabatan: "Anggota"

            },
            {
                id: 6,
                pid: 3,
                Nama: "Tanner May",
                Jabatan: "Anggota"

            },
            {
                id: 7,
                pid: 3,
                Nama: "Fran Parsons",
                Jabatan: "Anggota"

            }
        ]
    });

    $(".addlpm").click(function() {
        var title = " koko";
        $('#modallpm').modal('show');
    });

    $(".addpemdes").click(function() {
        var title = " koko";
        $('#modalpemdes').modal('show');
    });

    $(".addlinmas").click(function() {
        var title = " koko";
        $('#modallinmas').modal('show');
    });
</script>

</html>