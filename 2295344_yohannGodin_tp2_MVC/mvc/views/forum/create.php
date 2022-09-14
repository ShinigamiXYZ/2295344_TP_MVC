<h1>Crée un nouvel article</h1>
<div class='forum-container insert'>
<form action="index.php?module=forum&action=insert" method="post">
<?php ?>
    
        <label>
          titre
            <input type="text" name="titre" >
        </label>
        <label>
            article
            <input type="text" name="article" >
        </label>
        <label>
            date de parution
            <input type="date" name="dateParution" class="dateParution" value="<?php echo date(10);  ?>">
        </label>
        <input type="hidden" name="idUtilisateur" value="<?php echo $_SESSION['idUtilisateur']; ?>">


        <input type="submit" class="submit">
    </form>
 
    </div>

