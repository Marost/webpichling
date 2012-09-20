<?php
session_start();
if ($_SESSION["user-dp"]=="")
	header("Location:index.php?nosesion=1");
?>