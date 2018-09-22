<?php
    include 'empty.php';
    function test() {
        if (multiplication(1, 1) === 1 && multiplication(10, 10) === 100) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
