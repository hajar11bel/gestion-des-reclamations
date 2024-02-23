<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réclamations Affectées - RAK</title>
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
            color: #ddd;
            text-decoration: none;
            font-size: 18px;
        }
        .accueil {
            color: #fff;
            text-decoration: none;
            font-size: 18px;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
        }
        h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
        }
        li {
            margin-bottom: 10px;
            padding: 10px;
            background-color: #f9f9f9;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .reclamation {
            font-weight: bold;
        }
        .etat {
            font-style: italic;
            color: #888;
        }
        select {
            padding: 5px;
            font-size: 16px;
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
        <a href="index.html" class="accueil">Accueil</a>
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <a href="#" class="logout">Déconnexion</a>
    </div>
    <div class="container">
        <h2>Réclamations Affectées</h2>
        <ul>
            <li>
                <span class="reclamation">Réclamation 1</span> - État actuel : <span class="etat">En attente</span>
                <form action="#" method="POST">
                    <select name="etat_reclamation">
                        <option value="en_attente">En attente</option>
                        <option value="en_traitement">En traitement</option>
                        <option value="termine">Terminé</option>
                    </select>
                    <input type="submit" value="Mettre à jour">
                </form>
            </li>
            <li>
                <span class="reclamation">Réclamation 2</span> - État actuel : <span class="etat">En traitement</span>
                <form action="#" method="POST">
                    <select name="etat_reclamation">
                        <option value="en_attente">En attente</option>
                        <option value="en_traitement" selected>En traitement</option>
                        <option value="termine">Terminé</option>
                    </select>
                    <input type="submit" value="Mettre à jour">
                </form>
            </li>
            <!-- Ajoutez d'autres éléments de liste pour représenter les réclamations affectées -->
        </ul>
    </div>
</body>
</html>
