<?php
    function fonctionDeMaLibrairie(){
      return "Valeur retournée par ma librairie";
    }

    function getAllUtilisateurs(){
      return [
        (object) array('name' => 'Nicolas Sarkozy', 'age' => 55, 'blocked' => false, 'email' => 'nicolasdu92@gmail.com'),
        (object) array('name' => 'Justin Bieber', 'age' => 16, 'blocked' => false, 'email' => 'justin@gmail.com'),
        (object) array('name' => 'Francois Hollande', 'age' => 55, 'blocked' => false, 'email' => 'fifi@gmail.com'),
        (object) array('name' => 'Donald Trump', 'age' => 55, 'blocked' => true, 'email' => 'rocketman@gmail.com'),
        (object) array('name' => 'Disiz la peste', 'age' => 55, 'blocked' => false, 'email' => 'disizcacestdubonrap@gmail.com'),
        (object) array('name' => 'IAM', 'age' => 55, 'blocked' => false, 'email' => 'meilleurgroupederapfrancais@gmail.com'),
        (object) array('name' => 'Youssoupha', 'age' => 55, 'blocked' => false, 'email' => 'youyou@gmail.com'),
        (object) array('name' => 'Le Pen', 'age' => 80, 'blocked' => false, 'email' => null)
      ];
    }
?>
