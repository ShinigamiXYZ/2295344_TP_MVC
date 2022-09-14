<form action="index.php?module=user&action=edit" method="post">
    <?php foreach($data as $row) { ?>
    <input type="hidden" name="idUtilisateur" value="<?php echo $row['idUtilisateur']; ?>">
        <label>
            Nom
            <input type="text" name="nom" value="<?php echo $row['nom']; ?>">
        </label>
        <label>
            email / nom utilisateurs
            <input type="email" name="nomUtilisateur" value="<?php echo $row['nomUtilisateur'];  ?>">
        </label>
        <label>
            mot de passe
            <input type="text" name="motDePasse" >
        </label>
       
          
            <input type="hidden" name="motDePasse" value="<?php echo $row['motDePasse'];  ?>">
       
        <?php }?>
        <label>
            Editer
        <input type="submit">
    </label>
    </form>
 
  