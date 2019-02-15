<div class="container mt-3">
	<div class="row">
		<div class="col-6">
			<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#formModal">
				Tambah Data Siswa
			</button>
			<br><br>
			<h3>Daftar Siswa</h3>
			<ul class="list-group">
				<?php foreach($data['sw'] as $sw) : ?>
					<li class="list-group-item d-flex justify-content-between align-items-center">
						<?= $sw['nama']; ?>
						<a href="<?= BASEURL; ?>/siswa/detail/<?= $sw['id']; ?>" class="badge badge-primary">detail</a>
					</li>
				<?php endforeach; ?>
			</ul>
		</div>
	</div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModal">Tambah Data Siswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">

				<form action="<?= BASEURL; ?>/siswa/tambah" method="post">

					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="text" class="form-control" id="nama" name="nama">
					</div>

					<div class="form-group">
						<label for="nis">Nis</label>
						<input type="number" class="form-control" id="nis" name="nis">
					</div>

					<div class="form-group">
						<label for="email">Email</label>
						<input type="email" class="form-control" id="email" name="email">
					</div>

					<div class="form-group">
						<label for="jurusan">Jurusan</label>
						<select class="form-control" id="jurusan"name="jurusan">
							<option>Pilih Jurusan</option>
							<option value="Rekayasa Perangkat Lunak">Rekayasa Perangkat Lunak</option>
							<option value="Teknik Komputer Jaringan">Teknik Komputer Jaringan</option>
							<option value="Multimedia">Multimedia</option>
							<option value="Akuntansi">Akuntansi</option>
							<option value="Pemasaran">Pemasaran</option>
							<option value="Administrasi Perkantoran">Administrasi Perkantoran</option>
							<option value="Akomodasi Perhotelan">Akomodasi Perhotelan</option>
							<option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
							<option value="Seni Tari">Seni Tari</option>
						</select>
					</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
				</form>
      </div>
    </div>
  </div>
</div>