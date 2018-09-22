<?php
    include 'empty.php';
    function test() {
        if (estIlMajeure(18) === true && estIlMajeure(45) === true && estIlMajeure(5) === false) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
