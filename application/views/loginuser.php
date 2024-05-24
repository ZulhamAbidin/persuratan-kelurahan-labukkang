<!doctype html>
<!-- <html lang="en"> -->
<HTML lang="en">

<head>
    <title>SIPS | Sistem Informasi Pelayanan Surat Kantor Desa Marayoka</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#3063A0">
    <link href="https://fonts.googleapis.com/css?family=Fira+Sans:400,500,600" rel="stylesheet">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/vendor/open-iconic/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/vendor/fontawesome/css/all.css">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/vendor/flatpickr/flatpickr.min.css">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/stylesheets/theme.min.css" data-skin="default">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/stylesheets/theme-dark.min.css" data-skin="dark">
    <link rel="stylesheet" href="https://simpel.jtik.ft.unm.ac.id/assets/stylesheets/custom.css">
    <script>
        var skin = localStorage.getItem('skin') || 'default';
        var unusedLink = document.querySelector('link[data-skin]:not([data-skin="' + skin + '"])');

        unusedLink.setAttribute('rel', '');
        unusedLink.setAttribute('disabled', true);
    </script>
    <style type="text/css">
        main {
            background: url('http://surat.minur.tech/assets/foto/backgroud.jpeg') no-repeat center center fixed;
            -webkit-background-size: cover;
            -moz-background-size: cover;
            -o-background-size: cover;
            background-size: cover;
        }
    </style>
</head>
<!-- <body> -->

<BODY>
    <main class="auth">
        <header id="auth-header" class="auth-header" style="background-color: transparent;">
            <!-- <h1>
                <a href="https://simpel.jtik.ft.unm.ac.id/" style="font-weight: bold;font-size: 3rem;text-decoration: none;color: white;"><img src="https://simpel.jtik.ft.unm.ac.id/assets/images/logo/brand.png" class="w-10"></a>
            </h1> -->
            <p style="color: black;"> Sistem Informasi Pelayanan Surat <br>Kantor Desa Marayoka
            </p>
        </header>
        <form class="auth-form" action="<?php echo base_url('Suratonline/process_login'); ?>" method="POST">
            <?php
        if (isset($_GET['pesan'])) {
    $pesan = urldecode($_GET['pesan']);
    echo '<div class="error-message btn btn-primary">' . $pesan . '</div>';
}
        ?>
            <div class="form-group">
                <div class="form-label-group">
                    <input type="text" id="nik" class="form-control" name="nik" placeholder="Nama Pengguna" autofocus="">
                    <label for="user">NIKK</label>
                </div>
            </div>

            <div class="form-group">
                <div class="form-label-group">
                    <input type="password" id="password" class="form-control" name="password" placeholder="Kata Sandi">
                    <label for="pass">Kata Sandi</label>
                </div>
            </div>

            <div class="form-group">
                <button class="btn btn-lg btn-primary btn-block" type="submit">Masuk</button>
            </div>
            
            <div class="form-group">
                <a href="halaman_registrasi" class="text-red text-center">Belum Punya Akun ?, Silahkan Registrasi</a>
            </div>

            <div class="text-center text-red pt-3" id="alert"></div>
            <!-- <footer class="auth-footer text-center">Copyright © 2020. Depelove by Humairah
            </footer> -->
        </form>

    </main>
</BODY>
<!-- </body> -->
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/jquery/jquery.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/bootstrap/js/popper.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/bootstrap/js/bootstrap.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/stacked-menu/stacked-menu.min.js"></script>
<script src="https://simpel.jtik.ft.unm.ac.id/assets/javascript/theme.min.js"></script>

<script type="text/javascript">

</script>

</HTML>
<!-- </html> -->