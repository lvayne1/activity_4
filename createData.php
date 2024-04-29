<?php

$xml = new DOMdocument();
$xml->load("player.xml");


// can geT value 
$pn = $_REQUEST['pNum'];
$fn = $_REQUEST['firstname'];
$ln = $_REQUEST['lastname'];
$ag = $_REQUEST['age'];
$un = $_REQUEST['username'];
$pw = $_REQUEST['password'];

$player = $xml->createElement("player");
$firstname = $xml->createElement("firstname",$fn);
$lastname = $xml->createElement("lastname",$ln);
$age = $xml->createElement("age",$ag);
$username = $xml->createElement("username",$un);
$password = $xml->createElement("password",$pw);


$player->appendChild($firstname);
$player->appendChild($lastname);
$player->appendChild($age);
$player->appendChild($username);
$player->appendChild($password);
$player->setAttribute("pNum",$pn);

$xml->getElementsByTagName("players")[0]->appendChild($player);
$xml->save("player.xml");

?>
