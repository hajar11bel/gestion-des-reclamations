<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réclamations Affectées - RAK</title>
    <link rel="stylesheet" href="{{ asset('css/personnel/personnel.css') }}">
</head>
<body>
    <div class="header">
       
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="/personnel/logout" method="POST">
            @csrf
            <button class="logout">Déconnexion</button>
        </form>
    </div>
    <div class="container">
        <h2>Réclamations Affectées</h2>
        <ul>
            @foreach($reclamations as $reclamation)
            <li>
                <span class="reclamation">{{$reclamation->message}}</span> - État actuel : <span class="etat">{{$reclamation->statu}}</span>
                <form action="/update/{{$reclamation->id}}" method="POST">
                    @csrf
                    <select name="statu">
                        <option value="en attente" {{$reclamation->statu == 'en attente' ? 'selected' : ''}}>En attente</option>
                        <option value="en attente" {{$reclamation->statu == 'en traitement' ? 'selected' : ''}}>En traitement</option>
                       
                        <option value="termine" {{$reclamation->statu == 'termine' ? 'selected' : ''}}>Terminé</option>
                    </select>
                    <input type="submit" value="Mettre à jour">
                </form>
            </li>
            @endforeach
        </ul>
    </div>
    <footer class="footer text-center">
          All Rights Reserved by RAK. Designed and Developed by
          <a href="http://www.rak.ma/" target="_blank">SSI-RAK</a>.
        </footer>
</body>
</html>
