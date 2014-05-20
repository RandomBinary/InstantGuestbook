<?php
$usr = $_POST['usr'];
if(!is_dir("./" . $usr . "/")){
	mkdir("./" . $usr . "/");
	copy("./gb/index.html", "./" . $usr . "/index.html");
	copy("./gb/add.php" , "./" . $usr . "/add.php");
	chmod("./" . $usr . "/index.html", 0777);
	header("Location:./" . $usr . "/index.html");
}else{
	echo "A guestbook with the same name already exists!";
}
?>