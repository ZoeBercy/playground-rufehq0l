<?php
    include 'empty.php';
    function test() {
        if (dernierElementTableau([1, 2]) === 2 && premierElementTableau([-10, 10]) === 10 && premierElementTableau([]) === null) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
