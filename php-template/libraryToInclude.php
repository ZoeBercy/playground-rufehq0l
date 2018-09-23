<?php
    function fonctionDeMaLibrairie(){
      return "Valeur retournée par ma librairie";
    }

    function getAllUtilisateurs(){
      $toReturn =  json_decode('[
        {
          name : "Nicolas Sarkozy",
          age: 55,
          blocked: false,
          email : "nicolasdu92@gmail.com"
        },
        {
          name : "Francois Hollande",
          age: 50,
          blocked: false,
          email : "fifihollande@gmail.com"
        },
        {
          name : "Disiz la peste",
          age: 30,
          blocked: false,
          email : "disiz@gmail.com"
        },
        {
          name : "IAM",
          age: 30,
          blocked: false,
          email : "iam@gmail.com"
        },
        {
          name : "Youssoupha",
          age: 30,
          blocked: false,
          email : "youyou@gmail.com"
        }
      ]');

      echo $toReturn[0]->name."heeloooo";

      return $toReturn;
    }
?>
