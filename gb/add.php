<?php
echo "Started adding process...";
file_put_contents("index.html", $_POST['comment'] . "\n", FILE_APPEND);
file_put_contents("index.html", "<div class='signed'><b><i>" . $_POST['name'] . " (" . $_POST['mail'] . ")</i></b></div><hr>\n", FILE_APPEND);
echo "Done!";
header("Location:index.html");
?>