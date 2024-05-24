<section class="page-section mt-4">
	<div class="container">
		<br><br><br><br>

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
							<input class="form-control form-control-lg form-control-borderless" type="search"
								name="trackid" placeholder="Masukkan ID Pengajuan Anda">
						</div>
						<!--end of col-->
						<div class="col-auto">
							<button class="btn btn-lg btn-success" type="submit">Cari</button>
						</div>
						<!--end of col-->
					</div>
					<?= form_close()?>
				</div>
				<!--end of col-->
			</div>
		</div>

		<div class="container mt-5">
    <h2 class="text-center mb-4">Cara Mencari Surat Berdasarkan Kriteria Yang Anda Ajukan</h2>
    <h5 class="text-center mb-4">Contoh Format ID Surat: SPKK-7206023472934723-20240524 (JenisSurat-NIK-TahunBulanTanggal )</h5>
    <h5 class="text-center mb-4">Berikut Ini Rangkuman Kriteria Surat:</h5>
    <div class="list-group">
        <a href="#" class="list-group-item list-group-item-action">SPKK (Surat Pengantar Kartu Keluarga)</a>
        <a href="#" class="list-group-item list-group-item-action">SPNA (Surat Pengantar Nikah)</a>
        <a href="#" class="list-group-item list-group-item-action">SKKM (Surat Keterangan Kematian)</a>
        <a href="#" class="list-group-item list-group-item-action">SKH (Surat Keterangan Harga)</a>
        <a href="#" class="list-group-item list-group-item-action">SKD (Surat Keterangan Domisili)</a>
        <a href="#" class="list-group-item list-group-item-action">SKBM (Surat Keterangan Belum Menikah)</a>
        <a href="#" class="list-group-item list-group-item-action">SKPH (Surat Keterangan Pindah)</a>
        <a href="#" class="list-group-item list-group-item-action">SKM (Surat Keterangan Menikah)</a>
        <a href="#" class="list-group-item list-group-item-action">SKU (Surat Keterangan Usaha)</a>
        <a href="#" class="list-group-item list-group-item-action">SKT (Surat Keterangan Tidak Mampu)</a>
        <a href="#" class="list-group-item list-group-item-action">SKGG (Surat Keterangan Ganti Guna)</a>
        <a href="#" class="list-group-item list-group-item-action">SITU (Surat Izin Tempat Usaha)</a>
        <a href="#" class="list-group-item list-group-item-action">SIMB (Surat Izin Mendirikan Bangunan)</a>
    </div>
</div>


	</div>
</section>

<section class="page-section">
</section>
