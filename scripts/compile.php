<?php
/*
 * Compile all IPv4 and IPv6 files
 */

$IPv4 = "";
$IPv6 = "";

foreach(scandir("../zone4") as $file)
{
    if ($file[0] == ".") continue;
    $IPv4 .= trim(file_get_contents("../zone4/$file")) . "\n";
}

foreach(scandir("../zone6") as $file)
{
    if ($file[0] == ".") continue;
    $IPv6 .= trim(file_get_contents("../zone6/$file")) . "\n";
}

@unlink("../eu-cidr4.txt");
@unlink("../eu-cidr6.txt");
@unlink("../eu-ranges.txt");

file_put_contents("../eu-cidr4.txt", $IPv4);
file_put_contents("../eu-cidr6.txt", $IPv6);
file_put_contents("../eu-ranges.txt", $IPv4 . $IPv6);