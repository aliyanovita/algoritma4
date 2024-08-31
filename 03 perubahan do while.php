<?php
do {
    // blok kode yang akan diulang    
} while (<kondisi>);
?>
Contoh:
<?php 

$ulangi = 10;

do {
    echo "<p>ini adalah perulangan ke-$ulangi</p>";
    $ulangi--;
} while ($ulangi > 0);

echo "<p><strong>by:aliya novita";