<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Exo php fonction</title>
  </head>
  <body>
      <?php
      //Exo 1
        function exo1(){
          $i = true;
          echo $i;
        }
        exo1();

echo '</br>';
      //Exo 2
        function exo2(){
          $i = "This is a stringer!!!";
          echo $i;
        }
        exo2();

echo '</br>';
      //Exo 3
        function exo3(){
          $i = "Je concatène deux Strings, ";
          $j = "ça retourne un slip!";
          echo $i.$j;
        }
        exo3();

echo '</br>';
      //Exo 4
        function exo4(){
          $i = 2;
          $j = 2;
          if($i > $j){
            echo 'Le premier nombre est plus grand';
          }
          elseif ($i < $j) {
            echo 'Le premier nombre est plus petit';
          }
          elseif($i = $j) {
            echo 'Les deux nombres sont identiques';
          }
        }
        exo4();

echo '</br>';
      //Exo 5
        function exo5(){
          $i = "string";
          $j = 10;
          echo 'Si tu multiplis '.$i.' par '.$j.' tu obtiendras un bar à striptease! =D';
        }
        exo5();

echo '</br>';
      //Exo 6
        function exo6(){
          $nom = "Tuil";
          $prenom = "Alexandre";
          $age = 27;
          echo 'Bonjour '.$nom.' '.$prenom.', tu as '.$age.' ans.';
        }
        exo6();

echo '</br>';
      //Exo 7
        function exo7(){
          $age = 17;
          $genre = "Homme" || "Femme";
          if(($age > 18) && ($genre == "Homme")){
            echo 'Vous êtes un homme et vous êtes majeur';
          }
          elseif (($age < 18) && ($genre == "Homme")) {
            echo 'Vous êtes un homme et vous êtes mineur';
          }
          elseif (($age > 18) && ($genre == "Femme")) {
            echo 'Vous êtes une Femme et vous êtes majeur';
          }
          else{
            echo 'Vous êtes une Femme et vous êtes mineur';
          }
        }
        exo7();

echo '</br>';
      //Exo 8
        function exo8(){
          $nmb1 = 5;
          $nmb2 = 27;
          $nmb3 = 19;
          $result = $nmb1 + $nmb2 + $nmb3;
          echo 'La somme des 3 nombres est égale à '.$result;
        }
        exo8();
      ?>
  </body>
</html>
