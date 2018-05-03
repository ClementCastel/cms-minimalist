<html>
<head>
  <title>Accueil</title>
  <meta charset="utf-8" />
</head>
<body>
  <?php
  $conn = mysqli_connect('localhost', 'root','', 'cms');

  $sql = "SELECT * FROM articles";
  $result = mysqli_query($conn, $sql);

  if (mysqli_num_rows($result) > 0){
    while ($data = mysqli_fetch_assoc($result)){
      echo '<a href=article.php?id='.$data['ID'].'>'.$data['title'].'</a>'."<br />";
      echo $data['date']."<br /><br />";
    }
  }
  ?>
</body>
</html>
