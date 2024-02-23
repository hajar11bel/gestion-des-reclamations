<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Réclamater - RAK</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }
        .header {
            background-color: #333;
            color: #fff;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .logo {
            height: 50px;
            width: auto;
        }
        .logout {
            color: #ddd; /* Couleur grise pour le lien de déconnexion */
            text-decoration: none;
            font-size: 18px; /* Taille de la police */
            margin-left: auto; /* Pousse le lien de déconnexion vers la droite */
        }
        .accueil {
            color: #fff; /* Couleur blanche pour le lien "Accueil" */
            text-decoration: none;
            font-size: 18px; /* Taille de la police */
            margin-right: auto; /* Pousse le lien "Accueil" vers la gauche */
        }
        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
        }
        form {
            margin-top: 20px;
        }
        label {
            display: block;
            margin-bottom: 10px;
            font-weight: bold;
        }
        input[type="text"],
        textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        textarea {
            height: 100px;
        }
        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #2980b9;
        }
        .accueil{
            font-size: medium;
            font-weight: bold;
            background-color: #333;
            color: #fff;
            border: none;
        }
        .logout{
            font-size: medium;
            font-weight: bold;
            background-color: #333;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="/dashuser" class="accueil">Accueil</a> <!-- Lien vers la page principale -->
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
        <button class="logout">Déconnexion</button></form>
    </div>
    <div class="container">
        <h2>Faire une Réclamation</h2>
        <form action="/ajouterreclamation" method="POST">
           
            @csrf
           

            <label for="reclamation">Réclamation :</label>
            <textarea id="reclamation" name="message" required></textarea>
            
            <input type="submit" value="Soumettre">
        </form>
    </div>
</body>
</html>
