<?php

session_start();
$sid = session_id();
echo $sid;

$name = $_SESSION["name"];
$mucic = $_SESSION["music"];

echo $name;
echo $music;