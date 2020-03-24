<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Cinema</title>
</head>
<body>

<form action="traitement.php" method="post">
    <div>
        <label for="A">Le nom du cinema</label>
        <input type="text" id="nomCinema" name="nom_cinema">
    </div>
    <div>
        <label for="B">La ville du cinema :</label>
        <input type="text" id="villeCinema" name="ville_cinema">
    </div>
    <div>
        <label for="B">L'adresse du cinema :</label>
        <input type="text" id="adresseCinema" name="adresse_cinema">
    </div>
    <div>
        <label for="B">Le mail du cinema :</label>
        <input type="text" id="mailCinema" name="mail_cinema">
    </div>
    <div>
        <label for="B">Le numero de telephone du Cinema : </label>
        <input type="text" id="numeroCinema" name="telephone_cinema">
    </div>
    <div>
        <label for="B">le numero de salle: </label>
        <input type="text" id="numerosalle" name="numero_salle">
    </div>
    <div>
        <label for="B">Capicité de la salle : </label>
        <input type="text" id="capacitesalle" name="capacite_salle">
    </div>

    <div class="button">
        <button type="submit">Envoyer le message</button>
    </div>
</form>
</body>
</html>