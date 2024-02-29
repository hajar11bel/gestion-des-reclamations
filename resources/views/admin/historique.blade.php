<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Historique des Réclamations - RAK</title>
    <link rel="stylesheet" href="{{ asset('css/user/historique.css') }}">
</head>
<body>
    <div class="header">
        <a href="/gesUsers" class="accueil">Accueil</a>
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="{{ route('logout') }}" method="POST">
            @csrf
        <button class="/admin/logout">Déconnexion</button>
    </div>
    <div class="container">
        <h2>Historique des Réclamations</h2>
        <ul>
            @foreach ($reclamations as $reclamation)
           
            <li>
                <span class="reclamation" value="{{$reclamation->id}}">Réclamation :</span>{{$reclamation->message}} - Date de réclamation :   <span class="dates">{{$reclamation->created_at}}</span>, Date de réparation : <span class="dates">{{$reclamation->updated_at}}</span>
            </li>
            @endforeach
            <!-- Ajoutez d'autres éléments de liste pour représenter l'historique -->
        </ul></form>
    </div>
    <footer class="footer text-center">
          All Rights Reserved by RAK. Designed and Developed by
          <a href="http://www.rak.ma/" target="_blank">SSI-RAK</a>.
        </footer>
</body>
</html>
