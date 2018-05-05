<?php
require_once('config.php');
$conn = mysqli_connect(host, user,pass, db); //connection à la base de données

if (isset($_POST['submit'])){ //vérification que le formulaire a bien été envoyé

  $query = "INSERT INTO
  `articles` (`title`, `subtitle`, `content`, `note`)
VALUES
  (
    '$_POST[title]',
    '$_POST[subtitle]',
    '$_POST[content]',
    '$_POST[note]'
  )"; //création de la query avec récupération des valeurs du formulaire

  $insert = mysqli_query($conn,$query); //éxecution de la query

  if ($insert) {
    echo 'Article publié !'; //Si la query a été éxecutée correctement alors on affiche un message de confirmation
  } else {
    echo 'Il y a eu une erreur !'; //Dans le cas contraire, un message d'alerte
    var_dump($conn->error); //accompagné de l'erreur.
  }
}
?>

<html>
<head>
  <title>Page d'Ajout d'articles</title>
  <meta charset="utf-8" />
</head>
<body>

  <form method="post">
    <input type="text" placeholder="Titre" name="title" required /><br /><br />
    <input type="text" placeholder="Sous-titre" name="subtitle" required /><br /><br />
    Contenu de l'article:<br />
    <textarea name="content" required ></textarea><br /><br />
    1.<input type="radio" name="note" value="1" /><br /><br />
    2.<input type="radio" name="note" value="2" /><br /><br />
    3.<input type="radio" name="note" value="3" /><br /><br />
    <input type="submit" name="submit" value="Ajouter"/>
  </form>

</body>
</html>
