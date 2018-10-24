<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <link rel="stylesheet" href="../vue/design/style.css">
  <meta charset="utf-8">
  <style media="screen">
  form {
    /* Uniquement centrer le formulaire sur la page */
    margin: 0 auto;
    width: 400px;
    /* Encadré pour voir les limites du formulaire */
    padding: 1em;
    border: 1px solid #CCC;
    border-radius: 1em;
  }

  form div + div {
    margin-top: 1em;
  }

  label {
    /* Pour être sûrs que toutes les étiquettes ont même taille et sont correctement alignées */
    display: inline-block;
    width: 90px;
    text-align: right;
  }

  input, textarea {
    /* Pour s'assurer que tous les champs texte ont la même police.
    Par défaut, les textarea ont une police monospace */
    font: 1em sans-serif;

    /* Pour que tous les champs texte aient la même dimension */
    width: 300px;
    box-sizing: border-box;

    /* Pour harmoniser le look & feel des bordures des champs texte */
    border: 1px solid #999;
  }

  input:focus, textarea:focus {
    /* Pour souligner légèrement les éléments actifs */
    border-color: #000;
  }

  textarea {
    /* Pour aligner les champs texte multi‑ligne avec leur étiquette */
    vertical-align: top;

    /* Pour donner assez de place pour écrire du texte */
    height: 5em;
  }

  .button {
    /* Pour placer le bouton à la même position que les champs texte */
    padding-left: 90px; /* même taille que les étiquettes */
  }

  button {
    /* Cette marge supplémentaire représente grosso modo le même espace que celui
    entre les étiquettes et les champs texte */
    margin-left: .5em;
  }
  </style>
  <title>Formulaire</title>
</head>
<body>
  <div class="ban">
    <a href="../controleur/start.ctrl.php" class="title">
      <h1>Vente voiture</h1>
    </a>
    <div class="choix">
      <p>Bjr form lol</p>
    </div>
  </div>
  <div class="contenu">

    <form action="../controleur/monCompte.ctrl.php" method="post">
      <div>
        <label for="name">Nom :</label>
        <input type="text" id="name" name="user_name" />
        <div>
          <div>
            <label for="mail">E-mail :</label>
            <input type="email" id="mail" name="user_email" />
          </div>
      <div>
        <label for="mot_de_passe">Mot de passe :</label>
          <input name="mot_de_passe" type="password" id="mot_de_passe" size="20" />
        </div>
          <button type="submit" name="compte" value="monCompte" class="button">S'inscrire !</button>
        </form>

      </div>
    </div>
    </div>
    <footer>
      <p>le pied de page d'un site réalisé par des gens</p>
    </footer>

  </body>
  </html>
