<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Surat</title>
</head>

<style>
    @page {
        size: A4;
        margin: 15;
    }

    *,
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
        padding-top: 40px;
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
        width: 190px;
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

    <div class="container">

        <header class="header-surat">
             <div class="logo">
        <img src="<?= base_url() ?>assets/foto/logosurat.jpg">
    </div>
            <h1 class="font-header text-center font-bold">PEMERINTAH KOTA PAREPARE<br>KECAMATAN UJUNG<br>KELURAHAN LABUKKANG
            </h1>
            <p class="font-small font-italic font-bold text-center calibri">Alamat Jl. Mattirotasi Nomor 20 Telp. (0421) 2530 Kode Pos 91111 Parepare</p>
        </header>

        <div class="line"></div>
        <div class="line2"></div>

        <p class="font-normal text-underline text-center font-bold headline">SURAT PENGANTAR</p>

        <div class="nomor-content">
            <p class="text-center">Nomor : 42/01/01.2010/DS – MRK/II/2022</p>
        </div>

        <table>
            <tbody>
                <tr>
                    <td class="font-normal text-left padding-header" colspan="2">Yang bertanda tangan di bawah ini :
                    </td>
                </tr>
                <tr>
                    <td class="width padding-table">Nama</td>
                    <td>: <span class="font-bold">SIRAJUDDIN, S.Pd</span></td>
                </tr>
                <tr>
                    <td class="width padding-table">Jabatan</td>
                    <td>: Kepala Desa Marayoka</td>
                </tr>
                <tr>
                    <td class="text-left padding-header" colspan="2">Dengan ini memberikan keterangan bahwa :</td>
                </tr>
                <tr>
                    <td class="width padding-table">Nama</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">Jenis Kelamin</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">Tempat/Tgl.Lahir</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">Nik</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">Status Perkawinan</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">Agama</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">Alamat</td>
                    <td>:</td>
                </tr>
                <tr>
                    <td class="width padding-table">Tujuan</td>
                    <td>: KUA Kecamatan Bangkala</td>
                </tr>
                <tr>
                    <td class="width padding-table">Maksud</td>
                    <td>: Untuk mengurus surat keterangan belum nikah</td>
                </tr>
            </tbody>
        </table>

        <p class="margin-top-24">Demikian surat pengantar ini dibuat dengan sebenar- benarnya, untuk dipergunakan
            sebagaimana mestinya .</p>

        <table class="margin-top-24">
            <tr>
                <td class="width-footer"></td>
                <td>Marayoka,<br>
                    Kepala Desa Marayoka</td>
                <td>2022</td>
            </tr>
            <tr>
                <td class="width-footer"></td>
                <td class="img-footer"></td>
                <td></td>
            </tr>
            <tr>
                <td class="width-footer"></td>
                <td class="text-underline font-bold">SIRAJUDDIN, S.PD</td>
                <td></td>
            </tr>
        </table>

    </div>

</body>

</html>