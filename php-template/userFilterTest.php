<?php
    include 'empty.php';
    function test() {
        $ok = false;
        $usersToVerify = getAllUtilisateurs();
        $ok = $usersToVerify[0]->name == "Nicolas Sarkozy";
        $ok = $ok && $usersToVerify[1]->name == "Francois Hollande";
        $ok = $ok && $usersToVerify[2]->name == "Disiz la peste";
        $ok = $ok && $usersToVerify[3]->name == "IAM";
        $ok = $ok && $usersToVerify[4]->name == "Youssoupha";
        if ($ok) {
            echo("TECHIO> success true \r\n");
        }
        else {
            echo("TECHIO> success false  \r\n");

            echo("TECHIO> message --channel Oops! Try Again 🐞 \r\n");
        }
    }
    test();
?>
