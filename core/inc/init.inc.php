<?php
session_start();
if (isset($_SERVER['HTTP_REFERER']) && $_SERVER['HTTP_REFERER']!=""){if (strpos($_SERVER['HTTP_REFERER'],$_SERVER['HTTP_HOST'])===false) exit("Accesso Negato");}
/* INIZIO DEBUG */
/*
ini_set("log_errors" , "1");
ini_set("error_log" , "errori.txt");*/
/* FINE DEBUG */
header('Content-type: text/html; charset=utf-8');
include 'config.inc.php';
include 'db.class.php';
?>