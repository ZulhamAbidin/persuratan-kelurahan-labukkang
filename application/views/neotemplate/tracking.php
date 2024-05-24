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
    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var unusedLink = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');

        unusedLink.setAttribute('rel', '');
        unusedLink.setAttribute('disabled', true);
    </script>
    <script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/jquery/jquery.min.js"></script>

</head>
<style type="text/css">
    main {
        background: url('http://surat.minur.tech/assets/foto/backgroud.jpeg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
    }
</style>

<BODY>
    <div class="app has-fullwidth">
        <style type="text/css">
            .active {
                border: 1px solid#ffffff4d;
                border-radius: 6px;
            }
        </style>

        <header class="app-header app-header-dark" style="background-color: #39424a!important;">
            <nav class="navbar navbar-expand-lg navbar-dark bg-primary py-lg-0" style="background-color: #39424a!important;">
                <div class="container-fluid">
                    <a class="navbar-brand" href="/suratonline/halaman_dashboard" style="font-weight: bold;font-size: 2rem">
                        <img src="http://surat.minur.tech/assets/smash/images/logo-2.svg" class="w-75">

                    </a>
                    <button class="hamburger hamburger-squeeze d-flex d-lg-none" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation"><span class="hamburger-box"><span class="hamburger-inner"></span></span></button>
                    <div class="collapse navbar-collapse" id="navbarTogglerDemo01">

                        <ul class="navbar-nav mr-auto mt-2 mt-lg-0" style="font-family: Oswald,sans-serif;font-weight: bold">
                            <!-- <li class="nav-item">
                                <a class="nav-link" href="https://simpel.jtik.ft.unm.ac.id/">BERANDA</a>
                            </li> -->
                            <li class="nav-item"><a class="nav-link" href="/SIDM/suratonline/halaman_pengajuan">PENGAJUAN</a></li>
                            <!-- <li class="nav-item"><a class="nav-link" href="https://simpel.jtik.ft.unm.ac.id/index.php/main/judul">PENGADUAN</a></li>
                            <li class="nav-item"><a class="nav-link" href="https://simpel.jtik.ft.unm.ac.id/index.php/roadmap/mahasiswa">ROADMAP</a></li> -->
                        </ul>
                        <script type="text/javascript">
                            $(document).ready(function() {

                                $('.nav-item a').on('click', function(e) {
                                    localStorage.clear();
                                    localStorage.setItem('active', $(e.target).attr('href'));
                                });

                                var active = localStorage.getItem('active');
                                if (active) {
                                    $('a[href="' + active + '"][class=nav-link]').addClass('active');
                                }


                                $('.multi').on('click', function(e) {
                                    localStorage.clear();
                                    localStorage.setItem('multi2', $(this).attr('id'));
                                });

                                var multi2 = localStorage.getItem('multi2');
                                if (multi2) {
                                    $('#' + multi2).addClass('active');
                                }

                            });
                        </script>


                    </div>
                </div>
            </nav>
        </header>
        <main class="app-main">
            <div class="wrapper">
                <div class="page">
                    <div class="page-inner">
                        <div class="container-fluid bg-white rounded px-4">
                            <!-- <header class="page-title-bar">
                                <h1 class="page-title pt-3" style="font-family: Oswald,sans-serif;">
                                    <marquee>SELAMAT DATANG DI SISTEM INFORMASI PENGAJUAN JUDUL (SIMPEL) JURUSAN TEKNIK INFORMATIKA & KOMPUTER</marquee>
                                </h1>
                            </header> -->
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
                                                                        <?php if ($row['ttd'] == '1') : ?>
                                                                        <a href="<?= base_url() ?>/cetak/mypdf/<?= $row['id']; ?>">Download</a>
                                                                        <br>
                                                                        <?php elseif ($row['ttd'] == '0') : ?>
                                                                        <a href="<?= base_url() ?>/cetak/mypdfdua/<?= $row['id']; ?>">Download</a>
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

    </div>
</BODY>
<!-- </body> -->
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