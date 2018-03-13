<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Krowdis</title>
    <link rel="stylesheet" href="style2.css">
    <link rel="stylesheet" href="style.css">
  </head>
  <body class="kd-contact-page">
    <header>
      <?php
        include('header.php');
      ?>
    </header>
    <div class="kd-contact-title">
      <h1>Rencontrons-nous, nous apportons les chouquettes !</h1>
    </div>
      <section class="kd-contact">
        <div class="kd-img-left">
          <img src="assets/img/hommegauche.png" alt="Homme de gauche" class="kd-contact-images">
        </div>
        <div class="kd-form">
          <h2>Contact</h2>
          <form action="mail.php" method="post">
            <div class="kd-name">
              <input class="w-40 m-r-1-5" type="text" name="firstname" placeholder="Prénom">
              <input class="w-40" type="text" name="lastname" placeholder="Nom">
            </div>
            <input class="w-85" type="email" name="mail" placeholder="E-mail">
            <input class="w-85" type="text" name="phone" placeholder="Téléphone">
            <div>
              <input class="w-40 m-r-1-5" type="text" name="company" placeholder="Entreprise">
              <input class="w-40" type="text" name="position" placeholder="Position">
            </div>
            <div>
              <input class="m-r-1-5" type="checkbox" name="answerMail" value="Réponse par mail"><label class="kd-check">  Réponse par mail</label>
              <input type="checkbox" name="answerTel" value="Réponse par téléphone"><label class="kd-check">  Réponse par téléphone</label>
            </div>
            <textarea class="w-85" type="text" name="comments" placeholder="Commentaire"></textarea>
            <input class="kd-demo-link" style="width: 40%; padding: 12px 3%; border-radius: 25px;" type="submit" value="Envoyer">
          </form>
        </div>
        <div class="kd-img-right">
          <img src="assets/img/femmedroite.png" alt="Femme de droite" class="kd-contact-images">
        </div>
      </section>
      <?php
        include('footer.php');
      ?>
  </body>
</html>
