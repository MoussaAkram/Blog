<head>
    <meta charset="UTF-8" />
    <link rel="stylesheet" href="Contenu/billet.css" />
</head>

<div id="wrapper">

  <form id="paper" method="post" action="index.php?action=ajouter">

    <div id="margin">Titre: <input id="title" type="text" name="titre"></div>
    <textarea placeholder="Entrer votre blog." id="text" name="contenu" rows="4" style="overflow: hidden; word-wrap: break-word; resize: none; height: 160px; "></textarea>  
    <br>
    <input id="button" type="submit" value="Create">
    
  </form>

</div>
