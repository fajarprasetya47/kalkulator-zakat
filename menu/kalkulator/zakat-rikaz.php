
<div class="judul">
  <h1 align="center">  Zakat Rikaz  </h1>
  <br> 
</div>

<div class="container">
  <form action="" method="post">
      <div class="form-group">
          <label for="jumlah">Jumlah Harta :</label>
          <div class="inpt input-group">
            <span class="input-group-addon" id="jumlah_">Rp.  </span>
            <input type="number" class="form-control" id="jumlah" name="jumlah" aria-describedby="modal_">
          </div>
      </div>				
			<div class="hit form-group">
          <input type="submit" class="btn_ btn btn-info" value="Hitung">
      </div>	
	</form>
</div>
	
<?php
error_reporting (0);
$jumlah = $_POST['jumlah'];

$hasil = $jumlah * 20/100;

if (empty($jumlah)) {
  echo "<div class='alert alert-danger'>Jumlah harta yang ditemukan <b>tidak boleh kosong</b> !! </div>";
}else{
  echo "<div class='alert alert-info'> ZAKAT yang anda keluarkan sebesar <b>Rp. " . $hasil . ",- </b></div>";
}


?>
