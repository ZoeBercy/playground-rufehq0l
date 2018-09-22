<?php
    include 'empty.php';
    function test() {
        if (soustraction(1, 1) === 0 && soustraction(9, 3) === 6 && soustraction(3, 9) === -6) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
