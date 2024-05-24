
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
    var unusedLink = document.querySelector('link[data-skin]:not([data-skin="'+ skin +'"])');

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
<!-- <body> -->
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
  <li class="nav-item">
                                <a class="nav-link" href="halaman_dashboard">BERANDA</a>
                            </li> 
                            <li class="nav-item"><a class="nav-link" href="halaman_pengajuan">PENGAJUAN</a></li>

                             <li class="nav-item"><a class="nav-link" href="halaman_pengaduan">PENGADUAN</a></li>
                             <li class="nav-item"><a class="nav-link" href="<?= base_url() ?>">LOG OUT</a></li>
                             
  </ul>
<script type="text/javascript">
  $(document).ready(function(){

    $('.nav-item a').on('click', function(e) {
        localStorage.clear();
        localStorage.setItem('active', $(e.target).attr('href'));
    });

    var active = localStorage.getItem('active');
    if(active){
        $('a[href="' + active + '"][class=nav-link]').addClass('active');
    }


    $('.multi').on('click', function(e) {
        localStorage.clear();
        localStorage.setItem('multi2', $(this).attr('id'));
    });

    var multi2 = localStorage.getItem('multi2');
    if(multi2){
        $('#'+ multi2).addClass('active');
    }

});
</script>
   
      </div>
    </div>
  </nav>
</header>


<script type="text/javascript">
  function pop(title, msg, position = 'bottomRight') {
    iziToast.show({
      id: 'haduken',
      theme: 'dark',
      icon: 'icon-contacts',
      title: title,
      displayMode: 2,
      message: msg,
      position: position,
      transitionIn: 'flipInX',
      transitionOut: 'flipOutX',
      progressBarColor: 'rgb(0, 255, 184)',
      //image: 'img/avatar.jpg',
      imageWidth: 70,
      layout: 2,
      onClosing: function () {
        console.info('onClosing');
      },
      onClosed: function (instance, toast, closedBy) {
        console.info('Closed | closedBy: ' + closedBy);
      },
      iconColor: 'rgb(0, 255, 184)'
    });
  }
  $("#fm-pengaturan").submit(function(e){
    e.preventDefault();
    $.ajax({
      url : "https://simpel.jtik.ft.unm.ac.id/index.php/main/update_pengaturan",
      type: "post",
      data: $("#fm-pengaturan").serialize(),
      dataType:"json",
      beforeSend: function () {
          $('#btn_pengaturan').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Loading...').attr('disabled', true);
      },
      success:function(data){
        if (data.stat==true) {
          pop('Success!', data.msg, position = 'bottomRight');
          $('#modal_pengaturan').modal('hide');
        }else{
          pop('Error!', data.msg, position = 'bottomRight');
        }
        $('#btn_pengaturan').html('Submit').attr('disabled', false);
      }
    });
  });
</script>    <main class="app-main">
      <div class="wrapper">
        <div class="page">
  <div class="page-inner">
    <div class="container-fluid bg-white rounded px-4">
      <header class="page-title-bar">
        <h1 class="page-title pt-3" style="font-family: Oswald,sans-serif;"><marquee>SISTEM INFORMASI PELAYANAN SURAT KANTOR DESA MARAYOKA</marquee></h1>
      </header>
      <div class="page-section pb-2">
        <div class="row memo">
          <div class="col">
            <div class="alert alert-success" role="alert">
              <h4 class="alert-heading"></h4>
              <p></p>
              <hr>
              <p class="mb-0"></p>
            </div>
          </div>
        </div>
        <div class="row grap" hidden="">
          <div class="col-md-6">
            <div class="card card-fluid">
              <div class="card-body">
                <h3 class="card-title mb-4" style="font-family: Oswald,sans-serif;"> DATA PENGAJUAN TAHUN 2023 </h3>
                <div class="chartjs" style="height: 292px">
                  <canvas id="pengajuan-tahunini"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="card card-fluid">
              <div class="card-body">
                <h3 class="card-title mb-4" style="font-family: Oswald,sans-serif;"> DATA PENGAJUAN PERTAHUN</h3>
                <div class="chartjs" style="height: 292px">
                  <canvas id="pengajuan-tahun"></canvas>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row mhs mt-4" hidden="">
          <div class="col-12">
            <object data="https://simpel.jtik.ft.unm.ac.id/assets/panduan.pdf" type="application/pdf" width="100%" height="570px">
            </object>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
  if (''!='' || ''!='' || ''!='') {
    $('.memo').show();
  }else{
    $('.memo').hide();
  }
  var oto = 3;

    if (oto==3) {
      $('.grap').hide();
      $('.mhs').show();
    }else{
      $('.mhs').remove();
    }
    $('.mhs').remove();//Data masih JPTE
  $(document).ready(function () {

    var val = {"label":["January","February","March","April","May","June","July","August","September","October"],"data":["52","48","26","8","11","23","29","44","63","6"]};
    var data = {
      labels: val.label,
      datasets: [{
        backgroundColor: Looper.getColors('brand').indigo,
        borderColor: Looper.getColors('brand').indigo,
        data: val.data.map(Number)
      }]
    };

    var val2 = {"label":["2020","2021","2022","2023"],"data":["188","336","461","310"]};
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
</script>      </div>
    </main>
  </div>
</BODY>
<!-- </body> -->
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
<script src="https://simpel.jtik.ft.unm.ac.id/assets/vendor/ckeditor/config.js"></script></HTML>
<!-- </html> -->
