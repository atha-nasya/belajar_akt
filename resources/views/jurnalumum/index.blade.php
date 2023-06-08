
<h1>Jurnal Umum</h1>
<table border="1" width="75%">
<tr style='background:purple;color:white'>
<td>No</td>
<td>Kode Jurnal</td>
<td>Nomor Jurnal</td>
<td>Tanggal</td>
</tr>
<?php 
$no=0;
foreach ($jurnal as $rows){ 
$no++;
$tgl = date('d-M-Y', strtotime($rows->tanggal));
?>

<tr>
<td><?php echo $no ?></td>
<td><?php echo $rows->kode_jurnal ?></td>
<td><?php echo $rows->nomor_jurnal ?></td>
<td><?php echo $tgl ?></td>
</tr>
   
<?php }

?>
</table>
