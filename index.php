<?php 
$cryptinstall="./crypt/cryptographp.fct.php";
include $cryptinstall; 
?>
<html>
	<head>
		<style>
			body{background-image:url('bg.jpg');}
			.hero{background-image:url('divbg.jpg');padding:10;width:500;}
		</style>
	</head>
	<Body>
		<center>
		<br><br><div class="hero">
			<h1>Instant Guestbook</h1>
			<img src="anon.png"> It's anonymous!<br>
			<img src="quick.png"> It's instant!<br>
			<img src="free.png"> It's free!<br>
			<form method="POST" action="reg.php?<?PHP echo SID; ?>">
				<input type="text" name="usr" placeholder="Guestbook name..."><br>
				<?php dsp_crypt(0,1); ?>
				<Br><input type="text" name="code" placeholder="The text above..."><Br>
				<input type="submit" value="Create guestbook!">
			</form>
		</div>
		</centeR>
	</body>
</html>