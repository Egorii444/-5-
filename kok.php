<?php
for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "Первое число, которое делится как на 3, так и на 5: $i";
        break;
    }
}
?>