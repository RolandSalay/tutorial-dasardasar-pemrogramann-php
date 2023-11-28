<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["Roland", "Imanuel", "Salay"];
var_dump($names);

var_dump($names[0]);

$names[0] = "ROLAND";
var_dump($names);

$names[2] = "IMANUEL";
var_dump($names);

$names[1] = "SALAY";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "IMANUEL";
var_dump($names);

var_dump(count($names));



$eko = array(
	"id" => "Roland",
	"name" => "ROLAND SALAY",
	"age" => "17"
);
var_dump($eko);

var_dump($eko["name"]);

$jose = [
	"id" => "jose",
	"name" =>"Jose Kallem",
	"age" => 35
];
var_dump($jose);
