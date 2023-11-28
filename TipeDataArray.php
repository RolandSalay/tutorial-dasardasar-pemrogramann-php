<?php

$values = array(10, 9, 8, 7.5);
var_dump($values);

$names = ["noel", "ckristabel", "maniawai"];
var_dump($names);

var_dump($names[0]);

$names[0] = "NOEL";
var_dump($names);

$names[2] = "MANIAWASI";
var_dump($names);

$names[1] = "CKRISTABEL";
var_dump($names);

unset($names[1]);
var_dump($names);

$names[] = "CKRISTABEL";
var_dump($names);

var_dump(count($names));



$eko = array(
	"id" => "noel",
	"name" => "NOEL MANIAWASI",
	"age" => "30"
);
var_dump($eko);

var_dump($eko["name"]);

$jose = [
	"id" => "jose",
	"name" =>"Jose Kallem",
	"age" => 35
];
var_dump($jose);