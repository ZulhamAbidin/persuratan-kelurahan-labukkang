<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <?php echo form_open_multipart(); ?>
                    <!-- <form id="RegisterValidation" action="" method=""> -->
                    <div class="card-header card-header-icon" data-background-color="rose">
                        <i class="material-icons">people</i>
                    </div>
                    <div class="card-content">
                        <h4 class="card-title">Edit Berita</h4>

                        <div class="form-group">
                            <label class="label-control">Judul</label>
                            <input class="form-control" name="judul_b" id="judul_b" type="text" value="<?= $berita['judul_b']; ?>" />
                        </div>
                        <?= form_error('judul_b', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">Deskripsi</label>
                            <input class="form-control" name="deskripsi_b" id="deskripsi_b" type="text" value="<?= $berita['deskripsi_b']; ?>" />
                        </div>
                        <?= form_error('password', '<div class="text-danger">', '</div>'); ?>

                        <div class="form-group">
                            <label class="label-control">File Surat</label>
                            <div class="fileinput fileinput-new text-center" data-provides="fileinput">
                                <div class="fileinput-new thumbnail">
                                    <img src="<?= base_url() ?>assets/galery/<?= $berita['gambar_b']; ?>" alt="...">
                                </div>
                                <div class="fileinput-preview fileinput-exists thumbnail"></div>
                                <div>
                                    <span class="btn btn-danger btn-file">
                                        <i class="material-icons">cloud_upload</i>
                                        <span class="fileinput-new">Select File</span>
                                        <span class="fileinput-exists">Change</span>
                                        <input type="file" name="foto_b" id="foto_b" />
                                    </span>
                                    <a href="#pablo" class="btn btn-danger btn-round fileinput-exists" data-dismiss="fileinput"><i class="fa fa-times"></i> Remove</a>
                                </div>
                            </div>
                        </div>
                        <?= form_error('foto_b', '<div class="text-danger">', '</div>'); ?>

                        <div class="category form-category">
                            <div class="form-footer text-right">

                                <button type="submit" class="btn btn-success btn-fill">simpan</button>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>