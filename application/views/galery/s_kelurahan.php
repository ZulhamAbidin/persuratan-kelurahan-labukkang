<div class="content">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12">
			<?php if ($this->session->flashdata('success') == TRUE) : ?>
			<div class="alert alert-success">
				<span><?= $this->session->flashdata('success'); ?></span>
			</div>
			<?php endif; ?>
				<div class="card">
					<div class="card-header card-header-icon lorem" data-background-color="#2B5F9B">
						<i class="material-icons">people</i>
					</div>
					<div class="card-content">
						<h4 class="card-title">Struktur Kelurahan</h4>
						<image class="img-fluid" src="<?= base_url('/assets/galery/'); echo $profil[0]['s_kelurahan'] ?>" alt="struktur-kelurahan"></image>
						<a href="<?= base_url('galery/edit_s_kelurahan/')?><?= $profil[0]['id']?>"
							class="btn lorem pull-right">Edit</a>
					</div>
					<!-- end content-->
				</div>
				<!--  end card  -->
			</div>
			<!-- end col-md-12 -->
		</div>
		<!-- end row -->
	</div>
</div>
