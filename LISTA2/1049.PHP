<?php
$c1 = "vertebrado";
$c11 = "ave";
$c12 = "mamifero";
$c111 = "carnivoro";
$c112 = "onivoro";
$c124 = "herbivoro";
$a1 = "aguia";
$a2 = "pomba";
$a3 = "homem";
$a4 = "vaca";
$c2 = "invertebrado";
$c21 = "inseto";
$c22 = "anelideo";
$c211 = "hematofago";
$a5 = "pulga";
$a6 = "lagarta";
$a7 = "sanguessuga";
$a8 = "minhoca";

fscanf(STDIN, "%s", $a);
if ($a == $c1) {
    fscanf(STDIN, "%s", $b);
    if ($b == $c11) {
        fscanf(STDIN, "%s", $c);
        if ($c == $c111) {
            echo "$a1\n";
        } elseif ($c == $c112) {
            echo "$a2\n";
        }
    }
    if ($b == $c12) {
        fscanf(STDIN, "%s", $c);
        if ($c == $c112) {
            echo "$a3\n";
        } elseif ($c == $c124) {
            echo "$a4\n";
        }
    }
} elseif ($a == $c2) {
    fscanf(STDIN, "%s", $b);
    if ($b == $c21) {
        fscanf(STDIN, "%s", $c);
        if ($c == $c211) {
            echo "$a5\n";
        } elseif ($c == $c124) {
            echo "$a6\n";
        }
    }
    if ($b == $c22) {
        fscanf(STDIN, "%s", $c);
        if ($c == $c211) {
            echo "$a7\n";
        } elseif ($c == $c112) {
            echo "$a8\n";
        }
    }
}
?>