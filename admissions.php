<?php
$pname = $_POST["pname"];
$pnumber = $_POST["pnumber"];
$pemail = $_POST["pemail"];
$sname = $_POST["sname"];
$school = $_POST["school"];
$class = $_POST["class"];
$dob = $_POST["dob"];

$to = "sawuor@kis.sc.ke";
$body = "";
$body .="From: ".$pname. "\r\n";
$body .="Email: ".$pemail. "\r\n";
$body .="Number: ".$pnumber. "\r\n";
$body .="Student: ".$sname. "\r\n";
$body .="Class: ".$class. "\r\n";

mail($to,$pname,$body);

