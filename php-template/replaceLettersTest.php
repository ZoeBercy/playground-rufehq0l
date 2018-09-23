<?php
    include 'empty.php';
    function test() {
        $condition = remplacerLesLettres("Wesh Cousin") === "W3sh C0us1n" ;
        $condition = $condition && remplacerLesLettres("Couscous du bled") === "C0usc0us du bl3d" ;
        $condition = $condition && remplacerLesLettres("Salade tomate oignon") === "Salad3 t0mat3 01gn0n" ;
        $condition = $condition && remplacerLesLettres("EN MAJUSCULE AUSSI CA MARCHE NORMALEMENT") === "3N MAJUSCUL3 AUSS1 CA MARCH3 N0RMAL3M3NT" ;

        if ($condition) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");

            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
