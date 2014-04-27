<?php
session_start();
$_SESSION['crsid'] = $_SERVER['REMOTE_USER'];
header("Location: http://jkm50.user.srcf.net/ssc_app/");