<div class="content-wrapper">

	<section class="content">
		<?php  foreach ($mahasiswa as $student) { ?>

		<form method="post" action="<?php echo base_url().'mahasiswa/update'; ?>" >
			<div class="form-group">
			    <label>Nama Mahasiswa</label>
			    <input type="hidden" name="id" class="form-control" value="<?php echo $student->id ?>">
			    <input type="text" name="nama" class="form-control" value="<?php echo $student->nama ?>">
			 </div>

			<div class="form-group">
			    <label>Nim</label>
			    <input type="text" name="nim" class="form-control" value="<?php echo $student->nim ?>">
			</div>

			<div class="form-group">
			    <label>Tanggal Lahir</label>
			    <input type="date" name="tgl_lahir" class="form-control" value="<?php echo $student->tgl_lahir ?>">
			</div>

          <div class="form-group">
            <label>Jurusan</label>
            <select name="jurusan" class="form-control">
              <option>Sistem Informasi</option>
              <option>Manajemen</option>
              <option>Akuntansi</option>
              <option>Ilmu Komputer</option>
              <option>Teknik Sipil</option>
            </select>
          </div>

           <div class="form-group">
            <label>Alamat</label>
            <input type="text" name="alamat" class="form-control" value="<?php echo $student->alamat ?>">
          </div>

          <div class="form-group">
            <label>Email</label>
            <input type="text" name="email" class="form-control" value="<?php echo $student->email ?>">
          </div>

          <div class="form-group">
            <label>No. Telepon</label>
            <input type="text" name="no_telp" class="form-control" value="<?php echo $student->no_telp ?>"  >
          </div>
			
			<button type="reset" class="btn btn-danger">Reset</button>
			<button type="submit" class="btn btn-primary">Save</button>

		</form>

	<?php } ?>

	</section>

</div>