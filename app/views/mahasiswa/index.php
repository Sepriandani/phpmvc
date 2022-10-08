<div class="container mt-3">
	
	<div class="row">
		<div class="col-lg-6">
			<?php Flasher::flash(); ?>
		</div>
	</div>

<!-- button tambah data mahasiswa -->
	<div class="row mb-3">
		<div class="col-lg-6">
			<button type="submit" class="btn btn-primary tombolTambahData"  data-bs-toggle="modal" data-bs-target="#formModal">
			  Tambah Data Mahasiswa
			</button>
		</div>
	</div>

<!-- form cari -->
	<div class="row">
		<div class="col-lg-6">
			<form action="<?= BASEURL; ?>/mahasiswa/cari" method="post">
				<div class="input-group mb-3">
				  <input type="text" class="form-control" placeholder="Cari mahasiswa disini..." name="keyword" id="keyword" autocomplete="off">
				  <button class="btn btn-primary" type="submit" id="tombolCari">Cari</button>
				</div>
			</form>
		</div>
	</div>


	<div class="row">
		<div class="col-lg-6">
			
			<h3>Daftar Mahasiswa</h3>

			<ul class="list-group ">

				<?php foreach ($data['mhs'] as $mhs) : ?>

					<li class="list-group-item d-flex justify-content-between align-items-center">
						<?= $mhs['nama']; ?>
						<a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge bg-primary rounded-pill">detail</a>

						<a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge bg-success rounded-pill tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id="<?= $mhs['id']; ?>" >ubah</a>
						
						<a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge bg-danger rounded-pill" onclick="return confirm('Yakin ingin menghapus ?');">Hapus</a>
							
					</li>

				<?php endforeach; ?>
			</ul>
			
		</div>
	</div>

</div>


<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="judulModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       
       <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
       	<input type="hidden" name="id" id="id">

       	<div class="mb-3">
		  <label for="nama" class="form-label">Nama</label>
		  <input type="text" class="form-control" id="nama" name="nama">
		</div>

		<div class="mb-3">
		  <label for="nim" class="form-label">NIM</label>
		  <input type="number" class="form-control" id="nim" name="nim">
		</div>

		<div class="mb-3">
		  <label for="email" class="form-label">Email</label>
		  <input type="email" class="form-control" id="email" name="email">
		</div>

		<div class="mb-3">
			<label for="jurusan">Jurusan</label>
			<select class="form-control" id="jurusan" name="jurusan">
				<option value="Teknik Elektro">Teknik Elektro</option>
				<option value="Teknik Informatika">Teknik Informatika</option>
				<option value="Teknik Mesin">Teknik Mesin</option>
				<option value="Teknik Industri">Teknik Industri</option>
				<option value="Teknik Geofisika">Teknik Geofisika</option>
			</select>

		</div>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
       </form>
      </div>
    </div>
  </div>
</div>