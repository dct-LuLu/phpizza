<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8"/> 
</head>
<body>
  <p>Resultat des courses</p>
<?php


//PIZZA PREMADE
  $nbPique = $_GET['nbPique'];
  $nbFromage = $_GET['nbFromage'];
  $nbPasChere = $_GET['nbPasChere'];
  if (isset($nbPique) && !empty($nbPique)){
    echo 'La piquante: '.$nbPique.' soit '.$nbPique*12 .'€</br>';
  }
  if (isset($nbFromage) && !empty($nbFromage)){
    echo 'La coulante: '.$nbFromage.' soit '.$nbFromage*10 .'€</br>';
  }
  if (isset($nbPasChere) && !empty($nbPasChere)){
    echo 'La  ̸̢̨̞̰̜̗̥̳̰̘̦̬̳̹̳̙̟͖̰͕̹͆́̊̃̔̈́̽̿̀̔̑ ̶̧̯̣̭̳̟͙̦̈́͌̿̉̈̀͋̈̓̆̍̀̎̆͐̀̅͋̓̓̈̀͊̆̈̌̓̎̍̑͊̔̉̑̀͌̃́̄̇͛͂̉̐̾̕͘͘͜͝͠ ̶̤̰̩̖̲̹̻͍̗͎͓̼̘̌͋̿̌̾̿̆̓̀̀̊̇͝ : '.$nbPasChere.' soit '.$nbPasChere*6 .'€</br></br></br>';
  }
  if ((isset($nbPique) && !empty($nbPique))+(isset($nbFromage) && !empty($nbFromage))+(isset($nbPasChere) && !empty($nbPasChere))>1){
    echo 'Total de pizzas: '.($nbPique+$nbFromage+$nbPasChere).' soit '.($nbPique*12+$nbFromage*10+$nbPasChere*6).'€</br>';
  }
  $nbmesure = $_GET['nbmesure'];
  echo '</br></br>';
  

//PIZZA PERSO
  if (isset($nbmesure) && !empty($nbmesure)){
    $base = $_GET['base'];
    $viande_arr = $_GET['viande'];
    $legume_arr = $_GET['legume'];
    $pricetotal=6;//On part du principe que la pizza a une base
    echo 'Vous avez commandé '.$nbmesure.' pizza personnalisées qui contiennent:</br>'; 

    //BASE PERSO
    switch($base){
      case "saucetomate":
        echo 'Une base tomate, ';
        break;
      case "creme":
        echo 'Une base crème, ';
        break;
      default:
        echo 'Aucune base, ';
        $pricetotal-=6;
        break;
    }

    //VIANDE PERSO
    foreach($viande_arr as &$viandes){
      switch($viandes){
        case "jambon":
          echo 'avec du jambon, ';
          break;
        case "lard":
          echo 'avec du lard, ';
          break;
        case "chorizo":
          echo 'avec du chorizo, ';
          break;
        case "saumon":
          echo 'avec du saumon, ';
          break;
        default:
          echo 'sans viandes, ';
          break;
      }
    }
    $pricetotal+=(2*count($viande_arr));

    //LEGUME PERSO
    foreach($legume_arr as &$legumes){
      switch($legumes){
        case "tomate":
          echo 'avec des tomates, ';
          break;
        case "oignon":
          echo 'avec des oignons, ';
          break;
        case "poivron":
          echo 'avec des poivrons, ';
          break;
        case "champignon":
          echo 'avec des champignons, ';
          break;
        case "artichaud":
          echo 'avec des artichauds, ';
          break;
        case "roquette":
          echo 'avec de la roquette, ';
          break;
        case "brocoli":
          echo 'avec des brocolis, ';
          break;
        case "aubergine":
          echo 'avec des aubergines, ';
          break;
        default:
          echo 'sans legumes, ';
          break;
      }
    }
    $pricetotal+=(0.5*count($legume_arr));
  
    //TOTAL PERSO
    echo '</br>Pour un total de '.($nbmesure*$pricetotal).'€ de '.$nbmesure.' pizzas sur mesure</br>';
  }
  echo '</br></br></br>';

//TOTAL
  if ((isset($nbPique) && !empty($nbPique)) || (isset($nbFromage) && !empty($nbFromage)) || (isset($nbPasChere) && !empty($nbPasChere)) &&  (isset($nbmesure) && !empty($nbmesure))){  
    echo 'La commande que vous avez passez à donc un prix total de '.($nbmesure*$pricetotal+($nbPique*12+$nbFromage*10+$nbPasChere*6)).'€';
    
  }
?>
<html>