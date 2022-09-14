<div class='forum'>
<?php foreach($data as $row) { ?>

<div class='forum-container'>
  <div class="titre">
  <?php echo '<h2>'.$row['titre'].'</h2>' ?>
  </div>
  <div class="article">
  <?php echo $row['article'] ?>
      
    </div>
    <span class="date"><?php echo $row['dateParution'] ?></span>
</div>  <?php } ?>
</div>