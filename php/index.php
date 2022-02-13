<?php

$link =mysqli_connect("172.19.0.2","root","123", "Trucorp");

if (!$link)
{
    echo "tidak bisa konek ke MySQL\n" . PHP_EOL;
    exit;
}

$query = "SELECT * FROM users";
$result = mysqli_query($link, $query);

if (mysqli_num_rows($result) > 0) 
{
    // tampilin data per baris
    while($row = mysqli_fetch_assoc($result)) 
    {
      echo "| id: " . $row["ID"]. " | Nama: " . $row["Nama"]. " | Alamat: " . $row["Alamat"]. " | Jabatan: " . $row["Jabatan"]."<br>";
    }

} 

else
{
    echo "0 results";
}

?>