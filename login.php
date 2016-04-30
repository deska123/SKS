<?php
	include 'header.php';
?>

	<div class="w3-container w3-green">
		<h2 class="w3-center">Login Tamu</h2>
	</div>
	<form class="w3-container w3-center">
		<p>
			<input class="w3-input w3-center w3-hover-red" id="username" type="text" required>
			<label class="w3-label w3-validate">Username</label>
		</p>
		<p>
			<input class="w3-input w3-center w3-hover-red" id="password" type="password" required>
			<label class="w3-label w3-validate">Password</label></p>
		</p>
		<br>
		<p><input class="w3-btn w3-green w3-hover-red" type="submit" value="Login"></p>
		<br>
		<a href="#">Lupa password ?</a>
</form>
	
<?php
	include 'footer.php';
?>