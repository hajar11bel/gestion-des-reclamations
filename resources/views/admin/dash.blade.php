<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Admin - RAK</title>
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
            max-width: 1000px;
            margin: 20px auto;
            padding: 20px;
            display: flex;
            justify-content: space-between;
        }
        .card {
            flex: 1;
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            padding: 20px;
            margin-right: 20px;
        }
        .card h2 {
            text-align: center;
            margin-bottom: 20px;
        }
        .card-content {
            text-align: center;
        }
        .card-link {
            display: block;
            text-decoration: none;
            background-color: rgb(2, 98, 2);
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .card-link:hover {
            background-color: rgb(51, 89, 51);
        }
        #btn2{
            margin-top: 60px;
        }
        #btn1{
            margin-top: 33px;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="/dash" class="accueil">Accueil</a>
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
        <button class="logout" style="background-color: #333; border:none;">Déconnexion</button></form>
    </div>
    <div class="container">
        <div class="card">
            <h2>Gestion des Utilisateurs</h2>
            <div class="card-content">
                <p>Gérer les utilisateurs de l'application.</p>
                <a href="/gesUsers" class="card-link" id="btn1">Accéder</a>
            </div>
        </div>
        <div class="card">
            <h2>Gestion du Personnel</h2>
            <div class="card-content">
                <p>Gérer le personnel de l'entreprise.</p>
                <a href="/gesPerso" class="card-link" id="btn2">Accéder</a>
            </div>
        </div>
        <div class="card">
            <h2>Gestion des Réclamations</h2>
            <div class="card-content">
                <p>Gérer les réclamations des utilisateurs.</p>
                <a href="/gesRecla" class="card-link" id="btn3">Accéder</a>
            </div>
        </div>
    </div>
</body>
</html>
