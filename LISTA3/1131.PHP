<?php
    $inter_wins = 0;
    $gremio_wins = 0;
    $draws = 0;
    $grenais = 0;
    while (true) {
        list($inter_goals, $gremio_goals) = explode(" ", fgets(STDIN));
        if ($inter_goals > $gremio_goals) {
            $inter_wins++;
        } elseif ($gremio_goals > $inter_goals) {
            $gremio_wins++;
        } else {
            $draws++;
        }
        $grenais++;
        echo "Novo grenal (1-sim 2-nao)\n";
        $choice = (int) fgets(STDIN);
        if ($choice == 2) {
            break;
        }
    }
    echo $grenais . " grenais\n";
    echo "Inter:" . $inter_wins . "\n";
    echo "Gremio:" . $gremio_wins . "\n";
    echo "Empates:" . $draws . "\n";
    if ($inter_wins > $gremio_wins) {
        echo "Inter venceu mais\n";
    } elseif ($gremio_wins > $inter_wins) {
        echo "Gremio venceu mais\n";
    } else {
        echo "Nao houve vencedor\n";
    }
?>