<!doctype html>

<html lang="fr">
<head>
  <meta charset="utf-8">

  <title>Création du Personnage</title>
  <meta name="description" content="JDR">
  <meta name="author" content="Lyse Bojanek">

  <link rel="stylesheet" href="css/styles.css">

  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Mono&display=swap" rel="stylesheet"> 

</head>

<body>

    <h2>Créer ton Personnage</h2>

    <div class="slideInDown form">
        <h3 class="salut">Salut ! On papote, on papote mais je ne connais même pas ton nom !<br />
            Entre ton nom :</h3>
    

        <form class="slideInDown" action="ok.php" method="post">
        <p>
            <input type="text" name="nom" />
	        <br /><br />

            <h3>Maintenant j'ai besoin de ta taille et de tonpoids <br />afin de te confectionner une armure sur mesure !</h3>
            <br />

            <p>Ta taille (en cm)</p>
            <input type="text" name="taille" />
            <br />

            <p>Ton poids (en kg)</p>
            <input type="text" name="poids" />
            <br /><br />

            <h3>Très bien. Choisis donc ta classe :</h3>
	        <select name="classe" id="classe">
		        <option value="Guerrier" selected="selected">Guerrier</option>
		        <option value="Mage">Mage</option>
		        <option value="Voleur">Voleur</option>
		        <option value="Paladin">Paladin</option>
                <option value="Druide">Druide</option>
                <option value="Rodeur">Rodeur</option>
	        </select>
	        <br /><br />

            <h3>Super ! Encore une dernière requête et je ne t'embête plus.<br /> Quelle est ton ethnie ?</h3>

	        <input type="radio" name="ethnie" value="Humain" id="Humain" checked="checked" /> <label for="Humain"><img id="human" src="img/human.png" /><br />Humain</label>
	        <input type="radio" name="ethnie" value="Elfe" id="Elfe" /><label for="Elfe"><img id="elf" src="img/elf.png" /><br />Elfe</label>
            <input type="radio" name="ethnie" value="Nain" id="Nain" /><label for="Nain"><img id="dwarf" src="img/dwarf.png" /><br />Nain</label>
            <input type="radio" name="ethnie" value="Hobbit" id="Hobbit" /><label for="Hobbit"><img id="hobbit" src="img/hobbit.png" /><br />Hobbit</label>
	        <br /><br /><br /><br />

            <input type="submit" value="Valider" />
        </p>
        </form>
    </div>

  <script src="js/jquery.min.js"></script>
  <script src="js/scripts.js"></script>
</body>
</html>