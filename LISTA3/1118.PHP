<?php
    while (true) {
        $count = 0;
        $sum = 0;
        while ($count < 2) {
            $grade = (float) fgets(STDIN);
            if ($grade >= 0 && $grade <= 10) {
                $sum += $grade;
                $count++;
            } else {
                echo "nota invalida\n";
            }
        }
        echo "media = " . number_format($sum / 2, 2) . "\n";
        do {
            echo "novo calculo (1-sim 2-nao)\n";
            $choice = (int) fgets(STDIN);
        } while ($choice != 1 && $choice != 2);
        if ($choice == 2) {
            break;
        }
    }
?>