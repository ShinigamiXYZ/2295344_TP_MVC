<div class='forum'>
    <form action="index.php?module=forum&action=update" method="post">
        <?php 
        foreach ($data as $row) { ?>
            <div class='forum-container'>
                <input type="hidden" name="idUtilisateur" >
               
                <label>
                    TITRE
                    <input type="text" name="titre" value="<?php echo $row['titre']; ?>">
                </label>
                <label>
                    ARTICLES
                    <input type="text" name="article" value="<?php echo $row['article'];  ?>">
                </label>

              <input type="hidden" name="idForum" value="<?php echo $row['idForum'];  ?>"> 
                <form action="?module=forum&action=update" method="post"><input type="hidden" name="idForum" value="<?php echo $row['idForum'] ?>"><input type="submit" Value="Edit"></form>
                </form>
            </div>
            <?php
            
        } ?>

            </label>

    
</div>

