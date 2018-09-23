<?php
    function fonctionDeMaLibrairie(){
      return "Valeur retournée par ma librairie";
    }

    function getAllUtilisateurs(){
      $user1 = (object) array('name' => 'Nicolas Sarkozy', 'age' => 55, 'blocked' => false, 'email' => 'nicolasdu92@gmail.com');
      $user2 = (object) array('name' => 'Francois Hollande', 'age' => 55, 'blocked' => false, 'email' => 'nicolasdu92@gmail.com');
      $user3 = (object) array('name' => 'Disiz la peste', 'age' => 55, 'blocked' => false, 'email' => 'nicolasdu92@gmail.com');
      $user4 = (object) array('name' => 'IAM', 'age' => 55, 'blocked' => false, 'email' => 'nicolasdu92@gmail.com');
      $user5 = (object) array('name' => 'Youssoupha', 'age' => 55, 'blocked' => false, 'email' => 'nicolasdu92@gmail.com');
      return [$user1, $user2, $user3, $user4, $user5];
    }
?>
