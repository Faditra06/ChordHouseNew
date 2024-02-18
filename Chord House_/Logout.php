<?php
session_start();
session_destroy();
header('location:Guest_Land.html');
?>