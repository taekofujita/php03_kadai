<?php

session_start();
session_regenerate_id(true);
$sid = session_id();
echo $sid;

$_SESSION["name"] = "藤田妙子";
$_SESSION["music"] = "Gs academy";