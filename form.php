<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
</head>
<body>
<form  action="thanks.php"  method="POST">
    <div>
      <label  for="lastname">Nom :</label>
      <input  type="text"  id="lastname"  name="user_lastname">
    </div>
    <div>
      <label  for="firstname">Prénom :</label>
      <input  type="text"  id="fistname"  name="user_firstname">
    </div>
    <div>
      <label  for="email">Courriel :</label>
        <input  type="email"  id="email"  name="user_email">
    </div>
    <div>
      <label  for="phone">Téléphone :</label>
        <input  type="phone"  id="phone"  name="user_phone">
    </div>
    <div>
      <label for="user_subject">Choisir un sujet</label>
      <select name="user_subject" id="user_subject">
        <option value="La gauche ou la droite?">La gauche ou la droite?</option>
        <option value="Vaut-il mieux avoir un chat ou un enfant?">Vaut-il mieux avoir un chat ou un enfant?</option>
        <option value="Les céréales avant ou après le lait?">Les céréales avant ou après le lait?</option>
        <option value="Qui est arrivé en premier, l'oeuf ou la poule?">Qui est arrivé en premier, l'oeuf ou la poule?</option>
        <option value="Sandale/Chaussette?">Sandale/Chaussette?</option>
        <option value="Je n'ai plus d'inspiration">Je n'ai plus d'inspiration</option>
      </select>
    </div>
    <div>
      <label  for="message">Message :</label>
      <textarea  id="message"  name="user_message"></textarea>
    </div>
    <div  class="button">
      <button  type="submit">Envoyer votre message</button>
    </div>
  </form>
    
</body>
</html>

<?php


?>