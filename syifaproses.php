<?php
$customer= $_POST['Nama'];
$produk= $_POST['radios'];
$jumlah= $_POST['Jumlah'];

echo '<br/>Customer : '.$customer;
echo '<br/>Produk : '.$produk;
echo '<br/>Jumlah Pembelian : '.$jumlah;

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,2,',','.');
	return $hasil_rupiah;
 
}
if ($produk == "tv"){
  $total = 4200000 * $jumlah;
  echo '<br/>Total Belanja :'.rupiah($total);
}
elseif ($produk == "kulkas"){
  $total = 3100000 *$jumlah;
  echo '<br/> Total Belanja :'.rupiah($total);
}
else{
  $total = 3800000*$jumlah;
  echo '<br/>Total belanja :'.rupiah($total);
}
?>