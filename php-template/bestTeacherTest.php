
<?php
    include 'bestTeacher.php';
    function test() {
        if (quiEstLeMeilleurProf() === "Le prof de programmation Web") {
            echo("TECHIO> success true \r\n");
        } 
        else {
            echo("TECHIO> success false  \r\n");
            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
