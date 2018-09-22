<?php
    include 'returnArgument.php';
    function test() {
        if (jeRetourneMonArgument("abc") === "abc" && jeRetourneMonArgument(5677) === 5677 && jeRetourneMonArgument(true) === true) {
            echo("TECHIO> success true \r\n");
        } 
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
