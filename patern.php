1
12
123
1234
12345
123456
12345
1234
123
12
1

<?php
$jumlah = 6;

for ($j = 1; $j < $jumlah; $j++) {
    echo $j . "\n";
    for ($i = 1; $i <= $j; $i++) {
        echo $i;
    }
}
echo "\n";

for ($j = 1; $j <= $jumlah; $j++) {
    if ($j != 0) {
        echo "\n";
    }
    for ($i = 1; $i <= $j; $i++) {
        echo $i;
    }
}
echo "\n";


for ($j = 1; $j <= $jumlah; $j++) {
    if ($j != 0) {
        echo "\n";
    }
    for ($i = 1; $i <= $jumlah; $i++) {
        if ($i <= $j) echo $i;
    }
}
echo "\n";
?>