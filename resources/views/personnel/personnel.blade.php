<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Réclamations Affectées - RAK</title>
    <link rel="stylesheet" href="{{ asset('css/personnel/personnel.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>
<body>
    <div class="header">
       
        <img class="logo" src="logo_rak.png" alt="Logo RAK">
        <form action="/personnel/logout" method="POST">
            @csrf
            <button class="logout">Déconnexion</button>
        </form>
    </div>
    <div class="container bg-light">
        <h2>Réclamations Affectées</h2>
        <ul class="mt-5">
            @foreach($reclamations as $reclamation)
            <li style="border: 1px solid  gray;" class="mx-auto">
                <span class="reclamation">{{$reclamation->message}}</span> - État actuel : <span class="etat">{{$reclamation->statu}}</span>
                <form action="/update/{{$reclamation->id}}" method="POST">
                    @csrf
                    <select name="statu">

                        <option value="en attente" {{$reclamation->statu == 'en attente' ? 'selected' : ''}}>En attente</option>
                        <option value="en attente" {{$reclamation->statu == 'en traitement' ? 'selected' : ''}}>En traitement</option>

                       
                        <option value="termine" {{$reclamation->statu == 'termine' ? 'selected' : ''}}>Terminé</option>
                    </select>
                    <input type="submit" value="Mettre à jour" class="btn btn-success m-3">
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
