<?php
$enlace = $_GET["archivo"];
header ("Content-Disposition: attachment; filename=$enlace ");
header ("Content-Type: application/force-download");
header ("Content-Length: ".filesize($enlace));
readfile($enlace);

?>
