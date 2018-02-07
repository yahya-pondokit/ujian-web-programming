<?php

$cari = mysql_real_escape_string($_REQUEST['cari']);    

$sql = "SELECT * FROM data_warga WHERE nama LIKE '%".$term."%'";
$r_query = mysql_query($sql);

while ($row = mysql_fetch_array($r_query)){ 
echo 'Primary key: ' .$row['PRIMARYKEY']; 
echo '<br /> Code: ' .$row['Code']; 
echo '<br /> Description: '.$row['Description']; 
echo '<br /> Category: '.$row['Category']; 
echo '<br /> Cut Size: '.$row['CutSize'];  
} 
?>