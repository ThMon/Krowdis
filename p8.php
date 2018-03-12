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
      <h1>ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute</h1>
    </div>
      <section class="kd-contact">
        <div>
          <img src="assets/img/hommegauche.png" alt="Homme de gauche" class="kd-contact-images">
        </div>
        <div class="kd-form-phone">
          <h2>Téléphone</h2>
          <form action="" method="">
            <div>
              <input type="text" name="firstname" placeholder="Prénom">
              <input type="text" name="lastname" placeholder="Nom">
            </div>
            <input type="email" name="mail" placeholder="E-mail">
            <input type="text" name="phone" placeholder="Téléphone">
            <div>
              <input type="text" name="company" placeholder="Entreprise">
              <input type="text" name="position" placeholder="Position">
            </div>
            <input type="text" name="comments" placeholder="Commentaire">
            <input type="submit" value="Appelez-moi dans les 24h">
          </form>
        </div>
        <div class="kd-form-mail">
          <h2>Mail</h2>
          <form action="" method="">
            <div>
              <input type="text" name="firstname" placeholder="Prénom">
              <input type="text" name="lastname" placeholder="Nom">
            </div>
            <input type="email" name="mail" placeholder="E-mail">
            <div>
              <input type="text" name="company" placeholder="Entreprise">
              <input type="text" name="position" placeholder="Position">
            </div>
            <input type="text" name="mail" placeholder="Mail">
            <input type="submit" value="Envoyez">
          </form>
        </div>
        <div>
          <img src="assets/img/femmedroite.png" alt="Femme de droite" class="kd-contact-images">
        </div>
      </section>
      <?php
        include('footer.php');
      ?>
  </body>
</html>
