<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat</title>
</head>

<style>
    html {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Times New Roman';
    }

    .calibri {
        font-family: Calibri;
    }

    .container {
        padding-top: 0px;
        width: 90%;
        margin: 0 auto;
    }

    .logo {
         width: 60px;
         /*background-color: red;*/
         
         /*margin-left: 45%;*/
         text-align: center;
         margin : 0 auto;
         /*margin-right: 50%;*/
         
        /*display: flex;*/
        /*justify-content: center;*/
        /*align-items: center;*/
    }

    table,
    th,
    td {
        border-collapse: collapse;
        border: 0px solid black;
    }


    table {
        width: 100%;
        margin: 0;
        padding: 0;
    }

    .line {
        width: 100%;
        height: .5px;
        background-color: black;
        margin-top: 6px;
    }

    .line2 {
        width: 100%;
        height: .5px;
        background-color: black;
        margin-top: 1.5px;
    }

    .text-center {
        text-align: center;
    }

    .text-left {
        text-align: left;
    }

    .text-right {
        text-align: right;
    }

    .text-justify {
        text-align: justify;
    }

    .text-underline {
        text-decoration: underline;
    }

    .font-header {
        font-size: 14pt;
    }

    .font-small {
        font-size: 10pt;
    }

    .font-normal {
        font-size: 12pt;
    }

    .font-italic {
        font-style: italic;
    }

    .font-bold {
        font-weight: bold;
    }

    .margin-top-24 {
        margin-top: 24px;
    }

    .headline {
        margin-top: 24px;
    }

    .nomor-content {
        margin-bottom: 24px;
    }

    .value-nomor {
        margin-left: 90px;
    }

    .width {
        width: 140px;
    }

    .padding-header {
        padding: 16px 0;
    }

    .padding-table {
        padding: 4px 0;
        padding-left: 50px;
    }

    .footer-text {
        margin-top: 24px;
    }

    .margin-text {
        margin-left: 48px;
    }

    .width-footer {
        width: 60%;
    }

    .img-footer {
        height: 100px;
    }
    
</style>

<body>
    
<!--<img class="logo" style="margin : 0 auto" src="<?= base_url() ?>assets/foto/logosurat.jpg" >-->
  <div class="logo">
        <img src="<?= base_url() ?>assets/foto/logosurat.jpg">
    </div>

    <div class="container">

        <header class="header-surat">
            <h1 class="font-header text-center font-bold">PEMERINTAH KOTA PAREPARE<br>KECAMATAN UJUNG<br>KELURAHAN LABUKKANG
            </h1>
            <p class="font-small font-italic font-bold text-center calibri">Alamat Jl. Mattirotasi Nomor 20 Telp. (0421) 2530 Kode Pos 91111 Parepare</p>
        </header>

        <div class="line"></div>
        <div class="line2"></div>

        <p class="font-normal text-underline text-center font-bold headline">SURAT KETERANGAN IZIN USAHA</p>

        <div class="nomor-content">
            <p class="text-center">NOMOR : <span class="value-nomor">/DS-MRK/V/2022</span></p>
        </div>

        <table>
            <tbody>
                <tr>
                    <td class="font-normal text-left padding-header" colspan="2">Yang bertanda tangan di bawah ini koko:
                    </td>
                </tr>
                <tr>
                    <td class="width padding-table">Nama</td>
                    <td>: <span class="font-bold">AKBAR AMIN, S.Sos, MM</span></td>
                </tr>
                <tr>
                    <td class="width padding-table">Jabatan</td>
                    <td>: Lurah Kelurahan Labukkang</td>
                </tr>
                <tr>
                    <td class="text-left padding-header" colspan="2">Dengan ini memberikan keterangan bahwa :</td>
                </tr>
                <tr>
                    <td class="width padding-table">Nama</td>
                    <td>: <?= $penduduk[0]->nama ?></td>
                </tr>
                <tr>
                    <td class="width padding-table">Tempat/Tgl.Lahir</td>
                    <td>: <?= $penduduk[0]->tmpt_lhr ?>/<?= date("d-m-Y", strtotime($penduduk[0]->tgl_lhr)) ?> </td>
                </tr>
                <tr>
                    <td class="width padding-table">Agama</td>
                    <td>: <?= $penduduk[0]->agama ?></td>
                </tr>
                <tr>
                    <td class="width padding-table">Alamat</td>
                    <td>: <?= $penduduk[0]->alamat ?></td>
                </tr>
                <tr>
                    <td class="text-left padding-header" colspan="2">Benar yang namanya tersebut di atas mempunyai
                        dan menjalankan usaha :</td>
                </tr>
                <tr>
                    <td class="width padding-table">Nama Usaha</td>
                    <td>: <?= $pengajuan[0]->nama_usaha ?></td>
                </tr>
                <tr>
                    <td class="width padding-table">Alamat Usaha</td>
                    <td>: <?= $pengajuan[0]->alamat_usaha ?></td>
                </tr>
            </tbody>
        </table>

        <p class="margin-top-24 text-justify">Demikian surat keterangan ini dibuat dengan sebenar-benarnya dan berikan kepada yang bersangkutan untuk dipergunakan sebagaimana mestinya.</p>

        <table class="margin-top-24">
            <tr>
                <td class="width-footer"></td>
                <td>Labukkang, 30 Mei 2024<br>
                    Kelurahan Labukkang</td>
            </tr>
            <tr>
                <td class="width-footer"></td>
                <td class="img-footer">
                    <img src="<?= base_url() ?>assets/foto/barcode.png" height="60" alt="Barcode">
                </td>
            </tr>
            <tr>
                <td class="width-footer"></td>
                <td class="text-underline font-bold">SIRAJUDDIN, S.PD</td>
            </tr>
        </table>

    </div>

</body>

</html>