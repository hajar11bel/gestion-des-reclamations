<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Suivre les Réclamations - RAK</title>

    <link rel="stylesheet" href="{{ asset('css/user/suivreRecla.css') }}">
</head>
<body>
    <div class="header">
        <a href="/dashuser" class="accueil">Accueil</a>
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="{{ route('logout') }}" method="POST" >
            @csrf
        <button class="logout" style="border :none;">Déconnexion</button>
    </div>
    <div class="container">
        <h2>Suivre les Réclamations</h2>

        <ul>
            @foreach ($reclamations as $reclamation)
                
            
            <li>
                <span class="reclamation" value="{{$reclamation->id}}">Réclamation : {{$reclamation->message}}</span>  - État : <span class="etat" >En cours de traitement</span>
            
            </li>@endforeach
            <!-- Autres réclamations -->
        </ul></form>
    </div>
</body>
</html>
