<?php

$judul = 
array("Sherlock Holmes","Arsene Lupin" , "Game Of Throne" );
$Pengarang =
array("Arthur Conan Doyle", "Maurice LeBlanc","George R.R. Martin" );
$harga =
array("50000", "250000", "125000");
$stok = array("20", "50", "60");

$pembelian = array(
array("judul" => "Sherlock Holmes", "jumlah" => 5),
array("judul" => "Arsene Lupin", "jumlah" => 2),
array("judul" => "Game Of Throne", "jumlah" => 4),
);
// hitung total array
$totalArray = count($judul);
 
echo "<table border='1'>";
echo "<tr>";
echo "<th>Judul</th>";
echo "<th>Pengarang</th>";
echo "<th>Harga</th>";
echo "<th>Stok</th>";
echo "</tr>";
// looping datanya
for ($i=0; $i < $totalArray; $i++) { 
  echo "<tr>";
  echo "<td>$judul[$i]</td>";
  echo "<td>$Pengarang[$i]</td>";
  echo "<td>$harga[$i]</td>";
  echo "<td>$stok[$i]</td>";
  echo "</tr>";
}
echo "</table>";


?>
