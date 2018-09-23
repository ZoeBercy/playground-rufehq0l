<?php
    include 'empty.php';
    function test() {
        if (plusPetit(1, 1, 1) === 1 && plusPetit(10, 5, 1) === 1 && plusPetit(0, -5, 100) === -5 && plusPetit(5, 20, 30) === 5) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
