<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>T'as la classe !</title>
  <meta name="description" content="JDR">
  <meta name="author" content="Lyse Bojanek">

  <link rel="stylesheet" href="css/styles.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet"> 

</head>

<body>

    <h3 class="result">Eh bien echanté <span class="color"><?php echo $_POST['nom']; ?></span> !</h3>

    <h3>Tu mesure donc <span class="color"><?php echo $_POST['taille']; ?></span> cm et pèses <span class="color"><?php echo $_POST['poids']; ?></span> kg.</h3>

    <h3>Tu es un <span class="color"><?php echo $_POST['classe']; ?></span> <span class="color"><?php echo $_POST['ethnie']; ?></span></h3>

    <?php

        $force = 10;
        $int = 10;
        $char = 10;

        $image = 0;

        switch ($_POST['classe'])
        {
            case 'Guerrier':
                $force += 2;
                break;

            case 'Mage':
                $int += 2;
                break;

            case 'Voleur':
                $char += 2;
                break;

            case 'Paladin':
                $force += 1;
                $char += 1;
                break;

            case 'Druide':
                $force += 1;
                $int += 1;
                break;
            
            case 'Rodeur':
                $force += 1;
                $int += 1;
                $char += 2;
                break;   
        }

        switch ($_POST['ethnie'])
        {
            case 'Humain':
                $char += 2;
                $image ='img/human.png';
                break;

            case 'Elfe':
                $int += 2;
                $image ='img/elf.png';
                break;

            case 'Nain':
                $force += 2;
                $image ='img/dwarf.png';
                break;

            case 'Hobbit':
                $int += 1;
                $char += 1;
                $image ='img/hobbit.png';
                break; 
        }
    ?>

    <h3>Tes caractéristiques sont donc :</h3>
    <p class="cara">FORCE : <?php print "$force"; ?><br/>
    INTELLIGENCE : <?php print "$int"; ?> <br />
    CHARISME : <?php print "$char"; ?></p>
    
    <img class="perso" src='<?php echo $image;?>' />    
    

    <h3>Pas satisfait ? Alors <a href="oui.php" class="oui color">clique-ici</a> pour te donner une nouvelle identité.</h3>

</body>



  <script src="js/jquery.min.js"></script> 
  <script src="js/scripts.js"></script>
</body>
</html>