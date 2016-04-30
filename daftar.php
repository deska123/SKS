<?php
	include 'header.php';
?>

	<p class="w3-large w3-center">Daftar Menjadi Tamu</p>
	<div class="w3-card-4 w3-margin">
		<form class="w3-container w3-row-padding" action="tamu.php" method="post">
			<div class="w3-container w3-center">
				<input class="w3-btn w3-brown w3-hover-red" type="submit" value="Isi Form di Bawah, lalu Klik Disini untuk mendaftar">
			</div>
			<div class="w3-half">     
				<input type="text" class="w3-input w3-animate-input w3-hover-red" name="email" type="email" style="width:500px" required>
				<label class="w3-label w3-validate">Email</label>
			</div>
			<div class="w3-half">     
				<input type="text" class="w3-input w3-animate-input w3-hover-red" name="username" type="text" style="width:500px" required>
				<label class="w3-label w3-validate">Username</label>
			</div>
			<div class="w3-half"> 
				<input type="password" class="w3-input w3-animate-input w3-hover-red" name="password" type="password" style="width:500px" required>			
				<label class="w3-label w3-validate">Password</label>
			</div>
			<div class="w3-half">      
				<input type="text" class="w3-input w3-animate-input w3-hover-green" name="nama" type="text" style="width:500px">
				<label class="w3-label w3-validate">Nama Lengkap</label>	
			</div>
			<div class="w3-half"> 
				<input type="text" class="w3-input w3-animate-input w3-hover-red" name="jenjang" type="text" style="width:500px" required>			
				<label class="w3-label w3-validate">Jenjang Pendidikan</label>
			</div>
			<div class="w3-half">  
				<input type="text" class="w3-input w3-animate-input w3-hover-red" name="fakultas" type="text" style="width:500px" required>			
				<label class="w3-label w3-validate">Fakultas</label>
			</div>
			<div class="w3-half"> 
				<input type="text" class="w3-input w3-animate-input w3-hover-red" name="prodi" type="text" style="width:500px" required>			
				<label class="w3-label w3-validate">Program Studi / Jurusan</label>
			</div>
			<div class="w3-half"> 
				<input type="text" class="w3-input w3-animate-input w3-hover-red" id="universitas" type="text" style="width:500px" required>			
				<label class="w3-label w3-validate">Universitas</label>
			</div>
		</form>
		<br>
	</div>
	
<?php
	include 'footer.php';
?>