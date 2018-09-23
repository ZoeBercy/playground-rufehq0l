<?php
    include 'empty.php';
    function test() {
        if (plusPetit([1, 1]) === 1 && plusPetit([10, 1]) === 1 && plusPetit([5, 20]) === 5 && plusPetit([]) === null && plusPetit([1,2,3,4,5,6,-10]) === -10) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
