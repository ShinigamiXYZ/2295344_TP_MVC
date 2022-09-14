<table class='listing'>
  <thead>
    <tr>
      <th>Nom</th>
      <th>courriel</th>
      <th>Editer</th>
      <th>Effacer</th>
      
    </tr>
  <thead>
  <tbody>
  <?php session_start();  ?>
    <tr>
      <td><?php echo $_SESSION['nom'] ?></td>
      <td><?php echo $_SESSION['nomUtilisateur'] ?></td>
      <td><a href="?module=user&action=view&id=<?php echo $_SESSION['idUtilisateur']; ?>">Editer</a></td>
      <td><form action="?module=user&action=delete" method="post"><input type="hidden" name="idUtilisateur" value="<?php echo $_SESSION['idUtilisateur']?>"><input type="submit" Value="Effacer"></form></td>
    </tr>
  <?php  ?>
  <tbody>
</table>