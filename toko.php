<?php
echo "<h1>Data Buku</h1>";

 $Judul=array('Sherlock Holmes','Arsene Lupin','Game Of Throne');
 $Pengarang=array('Arthur Conan Doyle','Maurice LeBlanc','George R.R.Martin');
 $Harga=array('50000','250000','125000');
 $Stok=array('20','50','60');
 $a = 20;
 $b = 50;
 $c = 60;
 $Total = $a + $b + $c;
 $Jumlah = array(5,2,4);
for($y=0; $y < count($Jumlah); $y++){
   $Hasil[$y]=$Jumlah[$y] * $Harga[$y];
   
}
$Total_Pembelian= array_sum($Hasil);

$Array = count($Judul);
 
echo "<table border='1'>";
echo "<tr>";
echo "<th>Judul</th>";
echo "<th>Pengarang</th>";
echo "<th>Harga</th>";
echo "<th>Stok</th>";
echo "</tr>";

for ($x=0; $x < $Array; $x++) { 
  echo "<tr>";
  echo "<td>$Judul[$x]</td>";
  echo "<td>$Pengarang[$x]</td>";
  echo "<td>$Harga[$x]</td>";
  echo "<td>$Stok[$x]</td>";
  echo "</tr>";
}
    echo "<tr>";
    echo "<th>Total Stok</th>";
    echo "<th>$Total</th>";
    echo "</tr>";
    

echo "</table>";
 

echo "<h3>Data Pembelian</h3>";

 
$Array = count($Judul);
 
echo "<table border='1'>";
echo "<tr>";
echo "<th>Judul</th>";
echo "<th>Jumlah</th>";
echo "<th>Harga</th>";
echo "</tr>";

for ($x=0; $x < $Array; $x++) { 
  echo "<tr>";
  echo "<td>$Judul[$x]</td>";
  echo "<td>$Jumlah[$x]</td>";
  echo "<td>$Hasil[$x]</td>";
  echo "</tr>";
}
    echo "<tr>";
    echo "<th>Total Stok</th>";
    echo "<th>$Total_Pembelian</th>";
    echo "</tr>";
    

echo "</table>";
?>