<?php
$content = file_get_contents("boctham.php");

header("Content-type: text/css");
echo $content;