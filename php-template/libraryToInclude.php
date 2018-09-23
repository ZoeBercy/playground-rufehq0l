<?php
    function fonctionDeMaLibrairie(){
      return "Valeur retournée par ma librairie";
    }

    function getAllUtilisateurs(){
      return [
        (object) array('name' => 'Nicolas Sarkozy', 'age' => 55, 'blocked' => false, 'email' => 'nicolasdu92@gmail.com'),
        (object) array('name' => 'Francois Hollande', 'age' => 55, 'blocked' => false, 'email' => 'fifi@gmail.com'),
        (object) array('name' => 'Disiz la peste', 'age' => 55, 'blocked' => false, 'email' => 'disizcestpasdurapdepd@gmail.com'),
        (object) array('name' => 'IAM', 'age' => 55, 'blocked' => false, 'email' => 'meilleurgroupederapfrancais@gmail.com'),
        (object) array('name' => 'Youssoupha', 'age' => 55, 'blocked' => false, 'email' => 'youyou@gmail.com')
      ];
    }
?>
