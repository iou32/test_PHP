<html>
  <body>
  
  <li class ="livre"><a href="#">home</a></li>
  <li><a href="#">livre</a></li>
  <li><a href="new.php">ajouter_livre</a></li>
  <li><a href="#">compte</a></li>
  <div class="nouveau-livre">  
    <form action="/page-traitement-donnees" method="post">
    </div>


    <?php
    $servername = 'localhost';
    $username = 'root';
    $password = 'root';

//On établit la connexion
      $dbh = new PDO('mysql:host=localhost;dbname=bibliotheque', $username, $password);

      $nvianevi = $dbh->prepare('SELECT * FROM livre');
      $nvianevi->execute();
      $p = $nvianevi->fetchAll();
      //print_r($p);
?>
<table>
    <tr>
        <td>Titre</td>
        <td>auteur</td>
        <td>Synopsis</td>
    </tr>
    <?php
      foreach ($p as $value){
        ?>
        <tr>
        <td><?php echo $value['titre'];?></td>
        <td><?php echo $value['auteur'];?></td>
        <td><?php echo $value['synopsis'];?></td>

    </tr>
      <?php
    }
?>
</table>


</html>