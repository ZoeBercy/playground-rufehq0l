<?php
    include 'empty.php';
    function test() {
        if (somme(1, 1) === 2 && somme(-10, 10) === 0) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
