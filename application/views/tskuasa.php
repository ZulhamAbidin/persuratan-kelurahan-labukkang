<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat</title>
</head>

<style>
    /*@page {*/
    /*    size: A4;*/
    /*    margin: 15;*/
    /*}*/

    /**,*/
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
        padding-top: 4px;
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
        width: 120px;
    }

    .padding-header {
        padding: 1px 0;
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

    .space-footer {
        width: 200px;
    }

    .pt {
        padding-top: 50px;
        text-align: center;
    }
    .ptdua {
        padding-top: 5px;
        text-align: center;
    }
</style>

<body>
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

        <p class="font-normal text-underline text-center font-bold headline">SURAT KUASA</p>

        <div class="nomor-content">
            <p class="text-center">NOMOR : 42/01/01.2010/DS – MRK/II/2022</p>
        </div>

        <table>
            <tbody>
                <tr>
                    <td class="font-normal text-left padding-header" colspan="2">Saya yang bertanda tangan di bawah
                        ini :</td>
                </tr>
                <tr>
                    <td class="width padding-table">Nama</td>
                    <td>: <?= $penduduk[0]->nama ?></td>
                </tr>
                <tr>
                    <td class="width padding-table">TTL</td>
                    <td>: <?= $penduduk[0]->tmpt_lhr ?>/<?= date("d-m-Y", strtotime($penduduk[0]->tgl_lhr)) ?></td>
                </tr>
                <tr>
                    <td class="width padding-table">Alamat</td>
                    <td>: <?= $penduduk[0]->alamat ?></td>
                </tr>
                <tr>
                    <td colspan="2">Dengan ini memberikan kuasa kepada yang bersangkutan di bawah ini untuk mewakili
                        menerima bantuan Program Sembako Kelurahan Labukkang kec. Ujung, Kota Parepare</td>
                </tr>
                <tr>
                    <td class="width padding-table">Nama</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">TTL</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">Alamat</td>
                    <td>:</td>
                </tr>
            </tbody>
        </table>

        <p class="margin-top-24">Demikian surat kuasa ini saya buat agar dapat dipergunakan sebagaimana mestinya</p>

        <table class="margin-top-24">
            <tbody>
                <tr>
                    <td>Yang memberi kuasa</td>
                    <td class="space-footer"></td>
                    <td class="text-center">Labukkang, 2024 <br> Yang memberi kuasa yang diberi kuasa</td>
                </tr>
                <tr>
                    <td class="text-underline font-bold pt">...............</td>
                    <td class="space-footer"></td>
                    <td class="text-underline font-bold pt">...............</td>
                </tr>
            </tbody>
        </table>

        <p class="font-bold text-center ptdua">Mengetahui<br>Kelurahan Labukkang kec. Ujung, Kota Parepare</p>
        <div class="logo">
            <img src="<?= base_url() ?>assets/foto/barcode.png" height="60" alt="Barcode">
        </div>
         
        <p class="font-bold text-center ptdua text-underline">AKBAR AMIN, S.Sos, MMs</p>

    </div>

</body>

</html>
