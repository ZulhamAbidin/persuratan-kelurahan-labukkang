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
                                <li class="nav-item"><a class="page-scroll" href="#/home">Beranda</a></li>
                                <li class="nav-item"><a class="page-scroll" href="/#services">Profil</a></li>
                                <li class="nav-item"><a class="page-scroll" href="/#portfolio">Gallery</a></li>
                                <li class="nav-item"><a class="page-scroll" href="/#pricing">Struktur</a></li>
                                <li class="nav-item"><a class="page-scroll" href="/#about">Tentang</a></li>
                                <li class="nav-item"><a class="page-scroll" href="/#team">Developer</a></li>
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
                                            <button class="btn btn-outline-info" data-toggle="modal" data-target="#lihatFile<?= $row['id']; ?>"><i class="fa fa-eye"></i></button>
                                        </td>
                                    </tr>
                                    <?php if ($row['status'] == '5') : ?>
                                        <tr>
                                            <td>File Surat</td>
                                            <td>:</td>
                                            <td>
                                                <!-- <button class="btn btn-outline-info" data-toggle="modal" data-target="#lihatFile<?= $row['id']; ?>">Unduh</button> -->
                                                <a href="<?= base_url() ?>/cetak/mypdf/<?= $row['id']; ?>">Download (Dengan TTD)</a>
                                                <br>
                                                <a href="<?= base_url() ?>/cetak/mypdfdua/<?= $row['id']; ?>">Download (Tanpa TTD)</a>

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
                    <div class="copyright text-center mt-35">
                        <p class="text">Designed by <a href="https://uideck.com" rel="nofollow">UIdeck</a> and Built-with <a rel="nofollow" href="https://ayroui.com">Ayro UI</a> </p>
                    </div> <!--  copyright -->
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