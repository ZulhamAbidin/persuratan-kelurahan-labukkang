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
        font-family: Arial;
    }

    .calibri {
        font-family: Calibri;
    }

    .container {
        padding-top: 4px;
        width: 90%;
        margin: 0 auto;
    }

    header>* {
        font-family: 'Times New Roman';
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


    .nomor-content {
        margin-bottom: 24px;
    }

    .nomor-content p {
        margin-right: 175px;
    }

    .value-nomor {
        margin-left: 90px;
    }

    .width {
        width: 130px;
    }

    .padding-head {
        padding: 6px 0;
    }

    .padding-table {
        /* padding: 4px 0; */
        padding-left: 90px;
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

    .padding-left {
        padding-left: 50px;
    }

    .timur {
        margin-left: 40px;
    }

    .padding-left-footer {
        padding-left: 150px;
        width: 100px;
    }

    .bg-red {
        padding: 20px 0;
    }

    .saksi {
        background-color: yellow;
    }

    .padding-none {
        font-size: 14pt;
        text-align: start;
    }

    .margin-space {
        margin-left: 90px;
    }

    .margin-space-number {
        margin-left: 20px;
    }

    .width-foot {
        width: 200px;
    }

    .pad{
        padding-left: 40px;
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

        <p class="font-normal text-underline text-center font-bold headline">SURAT KETERANGAN HIBAH</p>

        <div class="nomor-content">
            <p class="text-center">Nomor : </p>
        </div>

        <table>
            <tbody>
                <tr>
                    <td class="font-normal text-left padding-header" colspan="2">Yang Bertanda Tangan Dibawah Ini :
                    </td>
                </tr>
                <tr>
                    <td class="width padding-table">Nama</td>
                    <td>: <?= $penduduk[0]->nama ?></td>
                </tr>
                <tr>
                    <td class="width padding-table">Umur</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">Pekerjaan</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">Alamat</td>
                    <td>: <?= $penduduk[0]->alamat ?></td>
                </tr>
                <tr>
                    <td colspan="2" class="font-bold font-italic">Selanjutnya Di Sebut Sebagai Pihak I ( Yang Memberi
                        Hibah )</td>
                </tr>
                <tr>
                    <td class="width padding-table">Nama</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">Umur</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">Pekerjaan</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">Alamat</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td colspan="2" class="font-bold font-italic">Selanjutnya Disebut Sebagai Pihak II ( Yang
                        Menerima Hibah )</td>
                </tr>
            </tbody>
        </table>

        <p class="footer-text text-justify"><span class="margin-text">Pihak </span>pertama telah benar-benar
            menghibahkan sebidang
            Tanah/Perumahan kepada pihak kedua. Dengan NOP. …………….Dengan luas…. M2 yang terletak di Kelurahan Labukkang kec. Ujung, Kota Parepare Pada SPPT …. dengan batas-batas sebagai berikut : </p>

        <div>
            <p><span class="padding-left">Sebelah</span> <span class="padding-left timur">-Timur</span> <span
                    class="padding-left">: Tanah Milik</span></p>
        </div>

        <table>
            <tbody>
                <tr>
                    <td class="padding-left-footer">-Barat</td>
                    <td>: Jalan Poros</td>
                </tr>
                <tr>
                    <td class="padding-left-footer">-Utara</td>
                    <td>: Tanah Milik</td>
                </tr>
                <tr>
                    <td class="padding-left-footer">-Selatan</td>
                    <td>: Tanah Milik</td>
                </tr>
            </tbody>
        </table>

        <p class="footer-text"><span class="margin-text">Demikian </span>Surat Keterangan Hibah ini kami buat Bersama,
            tampa ada unsur paksaan dari pihak manapun dengan Menanda Tangani Surat ini di depan para Saksi-saksi dan
            diketahui oleh Pemerintah Setempat.</p>

        <table class="margin-top-24">
            <tbody>
                <tr>
                    <td>Yang Menerima Hibah<br>Pihak II ( Kedua )</td>
                    <td></td>
                    <td class="pad">Yang Memberikan Hibah<br>Pihak I ( Pertama )</td>
                </tr>
                <tr>
                    <td colspan="3" class="bg-red"></td>
                </tr>
                <tr>
                    <td class="text-underline font-bold width-foot">..............</td>
                    <td></td>
                    <td class="text-underline font-bold pad">...............</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="font-bold text-center">SAKSI SAKSI</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="padding-head font-bold"><span class="margin-space-number">1.</span>( <span
                            class="margin-space">)</span></td>
                    <td></td>
                    <td class="font-bold">4 ( <span class="margin-space">)</span></td>
                </tr>
                <tr>
                    <td class="padding-head font-bold"><span class="margin-space-number">2.</span>( <span
                            class="margin-space">)</span>
                    </td>
                    <td></td>
                    <td class="font-bold">5 (<span class="margin-space">)</span></td>
                </tr>
                <tr>
                    <td class="padding-head font-bold"><span class="margin-space-number">3.RK</span> ( <span
                            class="margin-space">)</span></td>
                    <td></td>
                    <td class="font-bold">6.RK (<span class="margin-space">)</span></td>
                </tr>
                <tr>
                    <td class="padding-head">Mengetahui : <br><span class="font-bold">Lurah Labukkang</span></td>
                    <td></td>
                    <td class="pad">Labukkang 2024<br><span class="font-bold">Lurah Labukkang</span></td>
                </tr>
                <tr>
                    <td class="text-underline font-bold "> 
                    <img src="<?= base_url() ?>assets/foto/barcode.png" height="60" alt="Barcode">
                </td>
                    <td></td>
                    <td class="text-underline font-bold pad">...............</td>
                </tr>
            </tbody>
        </table>

    </div>

</body>

</html>
