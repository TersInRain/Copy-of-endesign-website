<?php

require_once('database.php');

mysqli_query($con, "INSERT INTO 'cal' ('id','name','email', 'mes' ) VALUES (NULL,'$name','$email', '$mes', )");
?>