<?php
fscanf(STDIN, "%d\n", $N);

for ($i = 0; $i < $N; $i++) {
    fscanf(STDIN, "%d\n", $X);

    if ($X == 0) {
        echo "NULL\n";
    } elseif ($X % 2 == 0) {
        if ($X > 0) {
            echo "EVEN POSITIVE\n";
        } else {
            echo "EVEN NEGATIVE\n";
        }
    } else {
        if ($X > 0) {
            echo "ODD POSITIVE\n";
        } else {
            echo "ODD NEGATIVE\n";
        }
    }
}
?>