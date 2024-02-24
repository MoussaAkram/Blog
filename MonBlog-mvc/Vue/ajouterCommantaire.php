<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Contenu/billet.css" />
</head>

<div id="wrapper">

  <form id="paper" method="post" action="index.php?action=commenter">

    <div id="margin">Auteur: <input id="title" type="text" name="auteur" value="<?= $_SESSION['username']; ?>" readonly></div>
    <textarea placeholder="Votre commentaire." id="text" name="contenu" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 160px; "></textarea>  
    <br>
    <input type="hidden" name="id" value="<?= $billet['id'] ?>" />
    <input id="button" type="submit" value="Commenter">
    
  </form>

</div>
