<?php

$link =mysqli_connect("172.19.0.3","root","123", "Trucorp");

if (!$link)
{
    echo "tidak bisa konek ke MySQL\n" . PHP_EOL;
    exit;
}

$sql = "SELECT * FROM users";
$result = mysqli_query($link,$sql);
$count = mysqli_num_rows($result);
echo $count;

?>