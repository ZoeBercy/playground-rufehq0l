<?php
    include 'empty.php';
    function test() {
        if (plusPetit(1, 1) === 1 && plusPetit(10, 1) === 1 && plusPetit(5, 20) === 5) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
