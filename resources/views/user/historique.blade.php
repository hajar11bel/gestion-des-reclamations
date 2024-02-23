<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique des Réclamations - RAK</title>
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
        .logout{
            font-size: medium;
            background-color: #333;
            color: white;
            border: none;
        }
        .accueil{
            font-size: medium;
            font-weight: bold;
            background-color: #333;
            color: #fff;
            border: none;
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
        .dates {
            font-style: italic;
            color: #888;
        }
        .logout, .accueil{
            font-size: medium;
            font-weight: bold;
            background-color: black;
        }
    </style>
</head>
<body>
    <div class="header">
        <a href="/dashuser" class="accueil">Accueil</a>
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
        <button class="logout">Déconnexion</button>
    </div>
    <div class="container">
        <h2>Historique des Réclamations</h2>
        <ul>
            @foreach ($reclamations as $reclamation)
           
            <li>
                <span class="reclamation" value="{{$reclamation->id}}">Réclamation :</span>{{$reclamation->message}} - Date de réclamation :   <span class="dates">{{$reclamation->created_at}}</span>, Date de réparation : <span class="dates">{{$reclamation->date_fin}}</span>
            </li>
            @endforeach
            <!-- Ajoutez d'autres éléments de liste pour représenter l'historique -->
        </ul></form>
    </div>
</body>
</html>
