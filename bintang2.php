****
***
**
*

<?php
$jumlah = 4;

for ($j = 0; $j < $jumlah; $j++) {
    if ($j != 0) {
        echo "\n";
    }
    for ($i = $jumlah - 1; $i >= $j; $i--) {
        echo "*";
    }
}
echo "\njumlah bintang : " .  $jumlah . "\n";


for ($j = 0; $j < $jumlah; $j++) {
    if ($j != 0) {
        echo "\n";
    }
    for ($i = 0; $i < $jumlah - $j; $i++) {
        echo "*";
    }
}
echo "\njumlah bintang : " .  $jumlah . "\n";
