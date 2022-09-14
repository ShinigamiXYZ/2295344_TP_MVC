<div class='forum'>
  <?php foreach ($data as $row) { ?>

    <div class='forum-container'>
      <div class=modifications>
        <div>
          <a href="?module=forum&action=view&id=<?php echo $row['idForum']; ?>"></a></td>
        </div>
        <div>
          <form action="?module=forum&action=delete" method="post"><input type="hidden" name="idForum" value="<?php echo $row['idForum'] ?>"></form>
        </div>
      </div>
      <div class="titre">
        <?php echo '<h2>' . $row['titre'] . '</h2>' ?>
      </div>
      <div class="article">
        <?php echo $row['article'] ?>

      </div>
      <span class="date"><?php echo $row['dateParution'] ?></span>
    </div> <?php } ?>