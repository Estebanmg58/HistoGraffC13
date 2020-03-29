<?php

session_start();

session_destroy();

header("location: ../loginGuia.html");
exit();

?>