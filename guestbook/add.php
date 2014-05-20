<?php
echo "Started adding process...";
file_put_contents("index.html", "<div class='comment'>", FILE_APPEND);
file_put_contents("index.html", "<b>" . $_POST['name'] . " (" . $_POST['mail'] . ")</b><br>", FILE_APPEND);
file_put_contents("index.html", $_POST['comment'], FILE_APPEND);
file_put_contents("index.html", "</div><br>\n", FILE_APPEND);
echo "Done!";
header("Location:index.html");
?>