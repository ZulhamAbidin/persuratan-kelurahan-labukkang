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
        margin-bottom: 2px;
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

    .pad {
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

        <div class="font-normal text-underline text-center font-bold headline">SURAT KETERANGAN JUAL BELI</div>

        <div class="nomor-content">
            <p class="text-center">Nomor : </p>
        </div>

        <table>
            <tbody>
                <tr>
                    <td class="font-normal text-left padding-header" colspan="2">Yang bertanda tangan di bawah ini
                        Masing-Masing kedua belah Pihak :
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
                    <td>: <?= $penduduk[0]->pekerjaan ?></td>
                </tr>
                <tr>
                    <td class="width padding-table">Alamat</td>
                    <td>: <?= $penduduk[0]->alamat ?></td>
                </tr>
                <tr>
                    <td colspan="2" class="font-bold font-italic">pihak Pertama selaku (Penjual)</td>
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
                    <td colspan="2" class="font-bold font-italic">pihak Kedua selaku (Pembeli)</td>
                </tr>
            </tbody>
        </table>

        <p class="footer-text text-justify"><span class="margin-text">Pihak </span>pertama benar-benar menjual sebidang
            tanah (Sawah) kepada pihak kedua. Dengan NOP………….. Dengan Luas …… M2 (………… Meter Persegi) Dengan harga
            sebanyak Rp, .................... ( ............................ ) Pada SPPT ……… Yang terletak Kelurahan Labukkang kec. Ujung, Kota Parepare
            sebagai berikut :</p>


        <p class="footer-text"><span class="margin-text">Demikianlah </span>surat keterangan jual beli ini kami buat
            bersama, tanpa ada unsur paksaan dari pihak manapun dengan menanda tangani surat keterangan ini di depan
            para saksi- saksi dan diketahui oleh pemerintah setempat z.</p>

        <table class="margin-top-24">
            <tbody>
                <tr>
                    <td class="font-italic font-bold">Pihak. II ( Pembeli )</td>
                    <td></td>
                    <td class="font-italic font-bold">PihaK. I ( Penjual )</td>
                </tr>
                <tr>
                    <td colspan="3" class="bg-red"></td>
                </tr>
                <tr>
                    <td class="text-underline font-bold width-foot">SUMANI</td>
                    <td></td>
                    <td class="text-underline font-bold pad">M.SAIN</td>
                </tr>
                <tr>
                    <td></td>
                    <td class="font-bold text-center">SAKSI SAKSI</td>
                    <td></td>
                </tr>
                <tr>
                    <td class="padding-head font-bold"><span class="margin-space-number">1.
                    <!--</span>( <span-->
                    <!--        class="margin-space">)</span>-->
                            </td>
                    <td></td>
                    <td class="font-bold">3. 
                    <!--( <span class="margin-space">)</span>-->
                    </td>
                </tr>
                <tr>
                    <td class="padding-head font-bold"><span class="margin-space-number">2.
                    <!--</span>( <span-->
                    <!--        class="margin-space">)</span>-->
                    </td>
                    <td></td>
                    <td class="font-bold">4.
                    <!--(<span class="margin-space">)</span>-->
                    </td>
                </tr>
                <tr>
                    <td class="padding-head">Mengetahui : <br><span class="font-bold">Lurah Labukkang</span></td>
                    <td></td>
                    <td class="pad">Labukkang 2024<br>Disaksikan Oleh<br><span class="font-bold">Lurah Labukkang</span></td>
                </tr>
                <tr>
                    <td class="text-underline font-bold ">AKBAR AMIN, S.Sos, MM</td>
                    <td></td>
                    <td class="text-underline font-bold pad">...............</td>
                </tr>
            </tbody>
        </table>

    </div>

</body>

</html>
