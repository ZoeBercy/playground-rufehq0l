<?php
    include 'empty.php';
    function test() {
        if (plusGrand(1, 1) === 1 && plusGrand(10, 1) === 10 && plusGrand(5, 20) === 20) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
