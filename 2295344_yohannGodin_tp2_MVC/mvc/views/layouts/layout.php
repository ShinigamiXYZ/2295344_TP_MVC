<?php if(!$_SESSION['nom'] ) {   ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=à, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <ul class="navigation">
      <li><a href="?module=user&action=login">Connecte-toi!!</a></li>
    </ul>
    <div class="container">
        <?php echo $content; ?>
    </div>
</body>
</html>

<?php }  else { ?>

    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=à, initial-scale=1.0">
    <title>Forum</title>
    <link rel="stylesheet" href="resources/css/style.css">
</head>
<body>
    <ul class="navigation">
        <li div class='user'><?php echo 'Welcome back  ' .($_SESSION['nom'])?> </li>
      <li><a href="?module=forum&action=index">Forum</a></li>
      <li><a href="?module=forum&action=view&id=<?php echo $_SESSION['idUtilisateur']; ?>">Modifiez vos articles</a></li>
      <li><a href="?module=forum&action=create">Créer un article</a></li>
      <li><a href="?module=user&action=logout">Log out</a></li>
    </ul>
    <div class="container">
        <?php  echo $content; ?>
    </div>
</body>
</html>

<?php } ?>